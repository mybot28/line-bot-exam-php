<?php
$access_token = 't8+QmnK27gaz3poIEOr0JvIg2XBlDpDFy+sevH9sXKt+1tMbahd/IyC1ewdCs5xjq4YFTrzGvzX8j9IlMAbWsZo6w7x0v8Dlg/KdJLI9/o2stthiLuera+aEk6xyYknFehfsAGZqG9OCSdvg+mMNJAdB04t89/1O/w1cDnyilFU=
';

$userId = 'U0ab243ffad6792de64c44b031620040e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
