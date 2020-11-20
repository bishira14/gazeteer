<?php
//https://free.currconv.com/api/v7/convert?apiKey=171232c91d9ba3383f43&q=GBP_USD&compact=y
$exchangeRates = array("hello");
ini_set('display_errors', 1);


$response=curl_request("https://free.currconv.com/api/v7/convert?apiKey=171232c91d9ba3383f43&q=GBP_GBP&compact=y");
curl_request("https://free.currconv.com/api/v7/convert?apiKey=171232c91d9ba3383f43&q=GBP_USD&compact=y");
curl_request("https://free.currconv.com/api/v7/convert?apiKey=171232c91d9ba3383f43&q=GBP_CAD&compact=y");

function curl_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    preg_match_all('![\d.]+!', $response, $matches);

    // array_push($exchangeRates,$matches[0][0]);

    print_r($matches[0][0]);
    echo ", ";

    return $response;
}


?>
