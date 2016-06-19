<?php

error_reporting(E_ALL);

require '../vendor/autoload.php';

use JonnyW\PhantomJs\Client;

define('URL',  'https://www.facebook.com/hashtag/polska');

$client = Client::getInstance();
$client->getEngine()->debug(true);
$client->getEngine()->setPath('/bin/phantomjs');

$request = $client->getMessageFactory()->createRequest(URL, 'GET');
$response = $client->getMessageFactory()->createResponse();

// Send the request
$client->send($request, $response);

echo $client->getLog();

var_dump($response->getStatus());
var_dump($response->getContent());
