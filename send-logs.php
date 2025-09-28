<?php

$remoteURL = 'http://localhost/TU_Berlin/llmscraper_honeypot_laravel/admin/public/api/visitorlog';
$params = ['visitor_headers' => 'John', 'ip_address' => 'Doe', 'path' => 36];

$defaults = array(

    CURLOPT_URL => $remoteURL,

    CURLOPT_POST => true,

    CURLOPT_POSTFIELDS => http_build_query($params),
    CURLOPT_RETURNTRANSFER => true,


);
$ch = curl_init();

curl_setopt_array($ch, $defaults);

curl_exec($ch);

curl_close($ch);


?>