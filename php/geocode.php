<?php
$curl = curl_init();
$url = "https://api.opencagedata.com/geocode/v1/json?q=" . $_REQUEST['country'] . "&key=2eb0625457664540a26db574fa1d4513&language=en&pretty=1";

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
