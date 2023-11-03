<?php
add_action('wpcf7_before_send_mail',function($contact_form, &$abort, $submission){
    var_dump($submission->get_posted_data('your-email'));
},10,3);