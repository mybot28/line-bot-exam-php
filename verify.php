<?php
$access_token = 't8+QmnK27gaz3poIEOr0JvIg2XBlDpDFy+sevH9sXKt+1tMbahd/IyC1ewdCs5xjq4YFTrzGvzX8j9IlMAbWsZo6w7x0v8Dlg/KdJLI9/o2stthiLuera+aEk6xyYknFehfsAGZqG9OCSdvg+mMNJAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
