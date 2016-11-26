<?php
/**
 * This file will show a simple implementation on how to send SMS using Chikka API
 * @author Ronald Allan Mojica
 * 
 */
include('ChikkaSMS.php');

$clientId = '858026984282baca4e68c9f40730d948988e92d8c2aaabba32984d60b8931c92';
$secretKey = 'cb9620b7eba24086b12bf7088659358d1fc1eed5ba226f280ec228a194408308';
$shortCode = '292900068';
$chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
$response = $chikkaAPI->sendText('1234563', '639359236225', 'tests');

header("HTTP/1.1 " . $response->status . " " . $response->message);

exit($response->description);