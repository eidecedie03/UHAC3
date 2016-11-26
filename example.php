<?php
/**
 * This file will show a simple implementation on how to send SMS using Chikka API
 * @author Ronald Allan Mojica
 * 
 */
include('ChikkaSMS.php');

$clientId = 'a11b421e6fdcfe3b02e160d73fd6f59a59eedb30306756bfbee49e0b1c57cde3';
$secretKey = '39b2015ec23da30b70fefe22c70260c8fc4d5a7d7fb7febc8c421ed347edbc66';
$shortCode = '29290636032';
$chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
$response = $chikkaAPI->sendText('1234561', '6391561866732', 'tests');

header("HTTP/1.1 " . $response->status . " " . $response->message);

exit($response->description);