<?php

$curl = curl_init();
$url = "https://restcountries.eu/rest/v2/name/".  $_REQUEST['country'];

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
