<?php
if (getenv('DEBUG' === true))
{
    ini_set('display_errors', 1);
    ini_set('display_starup_error', 1);
    error_reporting(E_ALL);
}

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::create(__DIR__ . "/..");
$dotenv->load();

use Aura\Router\RouterContainer;
use Illuminate\Database\Capsule\Manager as Capsule;
use WoohooLabs\Harmony\Harmony;
use WoohooLabs\Harmony\Middleware\DispatcherMiddleware;
use WoohooLabs\Harmony\Middleware\HttpHandlerRunnerMiddleware;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Zend\Diactoros\Response;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::WARNING));

// Contenedor de dependencias
$container = new DI\Container();

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
$map->get('index', '/', ['App\Controllers\IndexController','indexAction',]);
$map->get('indexJobs', '/jobs', ['App\Controllers\JobsController','indexAction',]);
$map->get('addJob', '/jobs/add', ['App\Controllers\JobsController','getAddJobAction',]);
$map->post('saveJob', '/jobs/add', ['App\Controllers\JobsController','getAddJobAction',]);
$map->get('deleteJob', '/jobs/delete', ['App\Controllers\JobsController','getDeleteJobAction',]);
$map->get('addUser', '/users/add', ['App\Controllers\UsersController','getAddUserAction',]);
$map->post('saveUser', '/users/add', ['App\Controllers\UsersController','getAddUserAction',]);
$map->get('loginUser', '/login', ['App\Controllers\AuthController','getLogin',]);
$map->post('authUser', '/login', ['App\Controllers\AuthController','getPostLoginAction',]);
$map->get('logoutUser', '/logout', ['App\Controllers\AuthController','getLogout',]);
$map->get('admin', '/admin', ['App\Controllers\AdminController','getAdminIndex',]);

// Get the route matcher from the container and try to match the request to a route.
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route)
{
    echo "No route";
    exit;
}
else
{
    try
    {
        // implementando harmony
        $harmony = new Harmony($request, new Response());
        $harmony
            ->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()));
        if (getenv('DEBUG' === true))
        {
            $harmony->addMiddleware(new \Franzl\Middleware\Whoops\WhoopsMiddleware());
        }
        $harmony
            ->addMiddleware(new \App\Middlewares\AuthenticationMiddleware())
            ->addMiddleware(new Middlewares\AuraRouter($routerContainer))
            ->addMiddleware(new DispatcherMiddleware($container, 'request-handler'));

        $harmony();

    }
    catch (Exception $e)
    {
        $log->error($e->getMessage());
        $emitter = new SapiEmitter();
        $emitter->emit(new Response\EmptyResponse(400));
    }
    catch (Error $e)
    {
        $emitter = new SapiEmitter();
        $emitter->emit(new Response\EmptyResponse(500));
    }
}
