<?php 
require_once './vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting(E_ALL);


$randomWords = ['prosperous','famine','prevail','introvert','pertain'];
$ranNum = mt_rand(0, count($randomWords)-1);
$client = new Goutte\Client();
$crawler = $client->request('GET', 'https://ejje.weblio.jp/content/'.$randomWords[$ranNum]);
//$vocab = $crawler->filter('h1')->text();

$vocab = $crawler->filter('h1')->each(function($node){
    echo $node->text();
});

var_dump($vocab);
