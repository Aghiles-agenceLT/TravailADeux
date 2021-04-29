<?php


$key = "d0de349aa995a7e42e6169f25f2bbd0e";

$url = "http://crm.sayens.fr/cxm/rest/leads";

$url = $url . $key;



$data = json_encode(array(
    "code" => "formulaire inscription event",
    "companyFree" => "Nike incorporation",
    "address" => "10 rue des Pâquerettes, Nancy 54000",
    "contactFree" => "Gwennael Deronne",
    "contactFunction" => "développeur",
    "phone" => "0781144976",
    "email" => "contact@free.fr",
));

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, $data);
$output = curl_exec($ch);
curl_close($ch);

add_filter('auto_update_plugin', '__return_false');
add_filter('plugin_auto_update_enabled', '__return_false');
add_filter('theme_auto_update_enabled', '__return_false');
add_filter('allow_major_auto_core_update', '__return_false');

var_dump($output);