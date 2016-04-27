<?php

define('APPLICATION_PATH', realpath(dirname(__FILE__)));

require_once("vendor/autoload.php");

use Respect\Config\Container;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Serializer;

$jsonEncoder = new JsonEncoder();
$xmlEncoder = new XmlEncoder();
$encoders = array($jsonEncoder, $xmlEncoder);


$getSetMethodNormalizer = new GetSetMethodNormalizer();
$normalizers = array($getSetMethodNormalizer);

$serializer = new Serializer($normalizers, $encoders);

$container = new Container("config/services.ini");

$router = $container->router;
$controller = $container->localController;
	
$router->any("/local/*", $controller);

$router->always("Accept",
	array(
		"text/html" => function(){
			header("HTTP/1.1 405 Bad Request");
			return "<h1>HTTP/1.1 405 Bad Request</h1>";
		},
		"application/json" => function($input) use ($serializer) {
			return $serializer->serialize($input,"json");
		},
		"text/xml" => function($input) use ($serializer) {
			return $serializer->serialize($input,"xml");
		}
	)
);