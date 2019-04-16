<?php

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$dotenv = Dotenv\Dotenv::create(__DIR__ . "/..");
$dotenv->load();

// Capsule aims to make configuring the library for usage outside of the Laravel framework as easy as possible.
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
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
	'auth' => true,
	]);
$map->post('saveJob', '/jobs/add', [
	'controller' => 'App\Controllers\JobsController',
	'action' => 'getAddJobAction',
	'auth' => true,
]);
$map->get('addUser', '/users/add', [
	'controller' => 'App\Controllers\UsersController',
	'action' => 'getAddUserAction',
	'auth' => true,
	]);
$map->post('saveUser', '/users/add', [
	'controller' => 'App\Controllers\UsersController',
	'action' => 'getAddUserAction',
	'auth' => true,
]);
$map->get('loginUser', '/login', [
	'controller' => 'App\Controllers\AuthController',
	'action' => 'getLogin',
]);
$map->post('authUser', '/login', [
	'controller' => 'App\Controllers\AuthController',
	'action' => 'getPostLoginAction',
]);
$map->get('logoutUser', '/logout', [
	'controller' => 'App\Controllers\AuthController',
	'action' => 'getLogout',
	'auth' => true,
]);
$map->get('admin', '/admin', [
	'controller' => 'App\Controllers\AdminController',
	'action' => 'getAdminIndex',
	'auth' => true,
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
	$needsAuth = $handlerData['auth'] ?? false;
	
	$ssesionUserId = $_SESSION['userId'] ?? null;
	if ($needsAuth && !$ssesionUserId)
	{
		echo "Protected route";
		exit;
	}

	$controller = new $controllerName;	
	$response = $controller->$actionName($request);
	
	foreach($response->getHeaders() as $name => $values)
	{
		foreach($values as $value)
		{
			header(sprintf('%s: %s', $name, $value), false);
		}
	}
	http_response_code($response->getStatusCode());
	
	echo $response->getBody();
}
