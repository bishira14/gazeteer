<?php
//http://api.openweathermap.org/data/2.5/weather?lat=-27&lon=133&appid=095a0c133cd0849ade4fa1947e31d17d
//http://api.openweathermap.org/data/2.5/weather?q=London,uk&appid={API%20key}
$curl = curl_init();
$url = 'http://api.openweathermap.org/data/2.5/weather?q='.$_REQUEST['country'].','.$_REQUEST['alphacode'].'&appid=095a0c133cd0849ade4fa1947e31d17d&units=metric';
// $url = 'http://api.openweathermap.org/data/2.5/weather?lat='.$_REQUEST['lat'].'&lon='.$_REQUEST['long'].'&appid=095a0c133cd0849ade4fa1947e31d17d';

curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURL_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "curl error" . $err;
} else {
  echo $response;
}

?>
