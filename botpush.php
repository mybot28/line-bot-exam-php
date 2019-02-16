<?php
require "vendor/autoload.php";

$access_token = 't8+QmnK27gaz3poIEOr0JvIg2XBlDpDFy+sevH9sXKt+1tMbahd/IyC1ewdCs5xjq4YFTrzGvzX8j9IlMAbWsZo6w7x0v8Dlg/KdJLI9/o2stthiLuera+aEk6xyYknFehfsAGZqG9OCSdvg+mMNJAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4f36036a5b4a751424d8eccdb138e31a';

$pushID = 'U0ab243ffad6792de64c44b031620040e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
