<?php
$apiKey = "6e140436a7cf61e86c29a49194efd7f2";
$cityId = "San Francisco Gotera";
$googleApiUrl = "api.openweathermap.org/data/2.5/weather?q=" . $cityId . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>