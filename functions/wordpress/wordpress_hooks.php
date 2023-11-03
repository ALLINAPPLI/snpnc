<?php
add_action('wpcf7_before_send_mail',function($contact_form, &$abort, $submission){
    $compagnie = $submission->get_posted_data('compagnie');
    
    if(!empty($compagnie)) {
        $email_form = $submission->get_posted_data('email-adh');
        $user_name = $submission->get_posted_data('prenom');
        $random_password = wp_generate_password( $length = 12, $include_standard_special_chars = false );
        $user_id = wp_insert_user([
          'user_login' => $email_form,
          'first_name' => $user_name,
          'user_pass' => $random_password,
          'user_email' => $email_form,
          //'role' => sanitize_title($compagnie[0]),
          ]
        );
    
        $user = get_user_by( 'ID', $user_id );
        if ( $user ) {
            $user->add_role( sanitize_title($compagnie[0]) );
        }
    
        if(is_wp_error($user_id)){
            $error = $user_id->get_error_message();
    
            $to = 'dev-email@wpengine.local'; // mail administration à renseigner
            $subject = 'Erreur : adhésion SNPNC';
            $body = $error . ' Impossible de créer l\'adhérent avec le role : Email utilisé pour le formulaire adhésion SNPNC : ' . $submission->get_posted_data('email-adh');
            $headers = array('Content-Type: text/html; charset=UTF-8');
    
            wp_mail( $to, $subject, $body, $headers );
        }
    }
    
},10,3);