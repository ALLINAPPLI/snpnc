<?php

    function mappingAcfFields($submitFormData, $userData) {
        
        $userId = $userData->data->ID;
        // mapping telephone : text field
        update_field('user_telephone',trim($submitFormData->get_posted_data('telephone')), 'user_' . $userId);
    
        // mapping fonction : select field
        $fonction = $submitFormData->get_posted_data('fonction');
        update_field('fonction',trim($fonction[0]), 'user_' . $userId);
        
        // mapping type de contrat : radio field
        $typedecontrat = $submitFormData->get_posted_data('typedecontrat');
        update_field('type-de-contrat',trim($typedecontrat[0]), 'user_' . $userId);
        
        // mapping compagnie : select field
        $compagnie = $submitFormData->get_posted_data('compagnie');
        update_field('la_compagnie', trim($compagnie[0]), 'user_' . $userId);
    }
