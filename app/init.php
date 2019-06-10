<?php
//require_once 'vendor/autoload.php';
//use Elasticsearch\ClientBuilder;
//if ( class_exists( 'ClientBuilder' ) )
//	$client = ClientBuilder::create()->build();
//$client = ClientBuilder::create()->build();
//$es = new Elasticsearch\Client([
//	'hosts' => ['127.0.0.1:9200']
//	
//	
//]);

require_once 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$es = ClientBuilder::create()->setHosts(['127.0.0.1:9200'])->build();


?>