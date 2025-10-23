<?php

$remoteURL = 'http://localhost/TU_Berlin/llmscraper_honeypot_laravel/admin/public/api/visitorlog';
$headers = json_encode(getallheaders());
$params = [
    'visitor_headers' => $headers, // Alle HTTP-Header als Array
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'Unbekannt',
    'path' => $_SERVER['REQUEST_URI'] ?? 'Unbekannt',
    'tlsVersion' => $_SERVER['SSL_PROTOCOL'] ?? 'Unbekannt',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unbekannt',
    'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'Unbekannt',
    'referrer' => $_SERVER['HTTP_REFERER'] ?? 'Kein Referrer',
    'browser_fingerprint' => hash(
        'sha256',
        ($_SERVER['HTTP_USER_AGENT'] ?? '') .
        ($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '') .
        ($_SERVER['REMOTE_ADDR'] ?? '') .
        ($_SERVER['HTTP_ACCEPT_ENCODING'] ?? '') .
        ($_SERVER['HTTP_ACCEPT'] ?? '')
    ),
];

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