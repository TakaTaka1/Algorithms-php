<?php 
require_once './vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting(E_ALL);

$client = new Goutte\Client();

$crawler = $client->request('GET', 'your URL which you want to scrape');
$vocab = $crawler->filter('h1')->text();

echo $vocab;
