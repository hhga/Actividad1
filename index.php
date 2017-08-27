<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
		
	$arreglo = ["Nombre" => "Hugo Humberto Garcia Aviles", "Cuenta" => "415155740"];
    
	return $app -> json	($arreglo);
});

$app->run();