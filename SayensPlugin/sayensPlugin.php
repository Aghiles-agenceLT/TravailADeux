<?php
/**
 * Plugin Name: Plugin Sayens
 */

// Create the API client with the main uri and the version of the API
ClientApi clientApi = new ClientApi("http://crm.sayens.fr/cxm/rest", "v2");
// Set the api key
clientApi.setApiKey("d0de349aa995a7e42e6169f25f2bbd0e");

// creer une fonction pour recupérer les input du formuaire
function get_form_input() {

        $data = json_encode(array(
        "code"  => "string",
        "companyFree" => "string",
        "address" => "string",
        "contactFree" => "string",
        "contactFunction" => "string",
        "phone" => "string",
        "email" => "string",
        ));

        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        curl_close($ch);
    }  
    
    


add_action('get_form_input');
