<?php
$json_string = file_get_contents('php://input');

$curl = curl_init("http://153.188.229.218/index.php");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charser=UTF-8'));
curl_exec($curl);
curl_close($curl);
?>
