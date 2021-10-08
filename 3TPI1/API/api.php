<?php
$apiKey = "6e140436a7cf61e86c29a49194efd7f2";

$dep1 = "Ahuachapán";
$googleApiUrl = "api.openweathermap.org/data/2.5/weather?q=" . $dep1 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);


//Departamento2
curl_close($ch);
$data = json_decode($response);
$currentTime = time();

$dep2 = "Cabañas";
$googleApiUrl2 = "api.openweathermap.org/data/2.5/weather?q=" . $dep2 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();

//Departemento 3

$dep3 = "Chalatenango";
$googleApiUrl3 = "api.openweathermap.org/data/2.5/weather?q=" . $dep3 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch3 = curl_init();

curl_setopt($ch3, CURLOPT_HEADER, 0);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch3, CURLOPT_URL, $googleApiUrl3);
curl_setopt($ch3, CURLOPT_URL, $googleApiUrl3);
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch3, CURLOPT_VERBOSE, 0);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
$response3 = curl_exec($ch3);

curl_close($ch3);
$data3 = json_decode($response3);
$currentTime3 = time();

//Departemento 4

$dep4 = "Cuscatlán";
$googleApiUrl4 = "api.openweathermap.org/data/2.5/weather?q=" . $dep4 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch4 = curl_init();

curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch4, CURLOPT_URL, $googleApiUrl4);
curl_setopt($ch4, CURLOPT_URL, $googleApiUrl4);
curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch4, CURLOPT_VERBOSE, 0);
curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);
$response4 = curl_exec($ch4);

curl_close($ch4);
$data4 = json_decode($response4);
$currentTime4 = time();

//Departemento 5

$dep5 = "La Libertad";
$googleApiUrl5 = "api.openweathermap.org/data/2.5/weather?q=" . $dep5 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch5 = curl_init();

curl_setopt($ch5, CURLOPT_HEADER, 0);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch5, CURLOPT_URL, $googleApiUrl5);
curl_setopt($ch5, CURLOPT_URL, $googleApiUrl5);
curl_setopt($ch5, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch5, CURLOPT_VERBOSE, 0);
curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER, false);
$response5 = curl_exec($ch5);

curl_close($ch5);
$data5 = json_decode($response5);
$currentTime5 = time();

//Departemento 6

$dep6 = "Morazán";
$googleApiUrl6 = "api.openweathermap.org/data/2.5/weather?q=" . $dep6 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch6 = curl_init();

curl_setopt($ch6, CURLOPT_HEADER, 0);
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch6, CURLOPT_URL, $googleApiUrl6);
curl_setopt($ch6, CURLOPT_URL, $googleApiUrl6);
curl_setopt($ch6, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch6, CURLOPT_VERBOSE, 0);
curl_setopt($ch6, CURLOPT_SSL_VERIFYPEER, false);
$response6 = curl_exec($ch6);

curl_close($ch6);
$data6 = json_decode($response6);
$currentTime6 = time();

//Departemento 7

$dep7 = "La Paz";
$googleApiUrl7 = "api.openweathermap.org/data/2.5/weather?q=" . $dep7 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch7 = curl_init();

curl_setopt($ch7, CURLOPT_HEADER, 0);
curl_setopt($ch7, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch7, CURLOPT_URL, $googleApiUrl7);
curl_setopt($ch7, CURLOPT_URL, $googleApiUrl7);
curl_setopt($ch7, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch7, CURLOPT_VERBOSE, 0);
curl_setopt($ch7, CURLOPT_SSL_VERIFYPEER, false);
$response7 = curl_exec($ch7);

curl_close($ch7);
$data7 = json_decode($response7);
$currentTime7 = time();

//Departemento 8

$dep8 = "Santa Ana";
$googleApiUrl8 = "api.openweathermap.org/data/2.5/weather?q=" . $dep8 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch8 = curl_init();

curl_setopt($ch8, CURLOPT_HEADER, 0);
curl_setopt($ch8, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch8, CURLOPT_URL, $googleApiUrl8);
curl_setopt($ch8, CURLOPT_URL, $googleApiUrl8);
curl_setopt($ch8, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch8, CURLOPT_VERBOSE, 0);
curl_setopt($ch8, CURLOPT_SSL_VERIFYPEER, false);
$response8 = curl_exec($ch8);

curl_close($ch8);
$data8 = json_decode($response8);
$currentTime8 = time();

//Departemento 9

$dep9 = "San Miguel";
$googleApiUrl9 = "api.openweathermap.org/data/2.5/weather?q=" . $dep9 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch9 = curl_init();

curl_setopt($ch9, CURLOPT_HEADER, 0);
curl_setopt($ch9, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch9, CURLOPT_URL, $googleApiUrl9);
curl_setopt($ch9, CURLOPT_URL, $googleApiUrl9);
curl_setopt($ch9, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch9, CURLOPT_VERBOSE, 0);
curl_setopt($ch9, CURLOPT_SSL_VERIFYPEER, false);
$response9 = curl_exec($ch9);

curl_close($ch9);
$data9 = json_decode($response9);
$currentTime9 = time();

//Departemento 10

$dep10 = "San Salvador";
$googleApiUrl10 = "api.openweathermap.org/data/2.5/weather?q=" . $dep10 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch10 = curl_init();

curl_setopt($ch10, CURLOPT_HEADER, 0);
curl_setopt($ch10, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch10, CURLOPT_URL, $googleApiUrl10);
curl_setopt($ch10, CURLOPT_URL, $googleApiUrl10);
curl_setopt($ch10, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch10, CURLOPT_VERBOSE, 0);
curl_setopt($ch10, CURLOPT_SSL_VERIFYPEER, false);
$response10 = curl_exec($ch10);

curl_close($ch10);
$data10 = json_decode($response10);
$currentTime10 = time();

//Departemento 11

$dep11 = "San Vicente";
$googleApiUrl11 = "api.openweathermap.org/data/2.5/weather?q=" . $dep11 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch11 = curl_init();

curl_setopt($ch11, CURLOPT_HEADER, 0);
curl_setopt($ch11, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch11, CURLOPT_URL, $googleApiUrl11);
curl_setopt($ch11, CURLOPT_URL, $googleApiUrl11);
curl_setopt($ch11, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch11, CURLOPT_VERBOSE, 0);
curl_setopt($ch11, CURLOPT_SSL_VERIFYPEER, false);
$response11 = curl_exec($ch11);

curl_close($ch11);
$data11 = json_decode($response11);
$currentTime11 = time();

//Departemento 12

$dep12 = "Sonsonate";
$googleApiUrl12 = "api.openweathermap.org/data/2.5/weather?q=" . $dep12 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch12 = curl_init();

curl_setopt($ch12, CURLOPT_HEADER, 0);
curl_setopt($ch12, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch12, CURLOPT_URL, $googleApiUrl12);
curl_setopt($ch12, CURLOPT_URL, $googleApiUrl12);
curl_setopt($ch12, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch12, CURLOPT_VERBOSE, 0);
curl_setopt($ch12, CURLOPT_SSL_VERIFYPEER, false);
$response12 = curl_exec($ch12);

curl_close($ch12);
$data12 = json_decode($response12);
$currentTime12 = time();

//Departemento 13

$dep13 = "La Unión";
$googleApiUrl13 = "api.openweathermap.org/data/2.5/weather?q=" . $dep13 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch13 = curl_init();

curl_setopt($ch13, CURLOPT_HEADER, 0);
curl_setopt($ch13, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch13, CURLOPT_URL, $googleApiUrl13);
curl_setopt($ch13, CURLOPT_URL, $googleApiUrl13);
curl_setopt($ch13, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch13, CURLOPT_VERBOSE, 0);
curl_setopt($ch13, CURLOPT_SSL_VERIFYPEER, false);
$response13 = curl_exec($ch13);

curl_close($ch13);
$data13 = json_decode($response13);
$currentTime13 = time();

//Departemento 14

$dep14 = "Usulután";
$googleApiUrl14 = "api.openweathermap.org/data/2.5/weather?q=" . $dep14 . "&units=metric&appid=" . $apiKey . "&lang=es";

$ch14 = curl_init();

curl_setopt($ch14, CURLOPT_HEADER, 0);
curl_setopt($ch14, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch14, CURLOPT_URL, $googleApiUrl14);
curl_setopt($ch14, CURLOPT_URL, $googleApiUrl14);
curl_setopt($ch14, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch14, CURLOPT_VERBOSE, 0);
curl_setopt($ch14, CURLOPT_SSL_VERIFYPEER, false);
$response14 = curl_exec($ch14);

curl_close($ch14);
$data14 = json_decode($response14);
$currentTime14 = time();

?>

