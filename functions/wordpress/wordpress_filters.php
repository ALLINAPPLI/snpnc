<?php
    /*add_filter( 'wpcf7_validate_email*', function($result,$tag){
        if ( 'email-adh' == $tag->name ) {
            $emailAdh = isset( $_POST['email-adh'] ) ? trim( $_POST['email-adh'] ) : '';
    
            // user exist in db ?
            $userInProject = get_user_by('email', $emailAdh);
            if(!empty($userInProject)) {
                $result->invalidate($tag,'Votre email est déja connu dans notre base de données. Vous êtes déjà adhérent !!');
            }
        }
    
        return $result;
    }, 20, 2 );*/