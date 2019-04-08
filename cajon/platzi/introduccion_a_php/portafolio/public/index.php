<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';


use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

// Capsule aims to make configuring the library for usage outside of the Laravel framework as easy as possible.
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'portafolio',
    'username'  => 'root',
    //'password'  => 'zxasqw12',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$route = $_GET['route'] ?? '/';
// ?? fusion de null: si el primer valor es null se asigna el segundo, se pueden concatenar (en respuesta al ternario)
// $route = isset($_GET['route']) ? $_GET['route'] : '/';

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

// probando diactoros
// var_dump($request->getUri()->getPath());

// Create the router container and get the routing map
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

// Add a route to the map, and a handler for it
// $map->get('nombre', 'contenido_del_url','archivo_o_accion(handler)');
$map->get('index', '/', [
	'controller' => 'App\Controllers\IndexController',
	'action' => 'indexAction',
	]);
$map->get('addJob', '/jobs/add', [
	'controller' => 'App\Controllers\JobsController',
	'action' => 'getAddJobAction',
	]);
$map->post('saveJob', '/jobs/add', [
	'controller' => 'App\Controllers\JobsController',
	'action' => 'getAddJobAction',
]);

// Get the route matcher from the container and try to match the request to a route.
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (! $route)
{
    echo "No route";
    exit;
}
else
{
	// testing de handler result
	// var_dump($route->handler);
	
	$handlerData = $route->handler;
	$controllerName = $handlerData['controller'];
	$actionName = $handlerData['action'];
	
	$controller = new $controllerName;	
	$controller->$actionName($request);	
}



















