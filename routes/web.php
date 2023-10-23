<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello-lumen', function (){
    return "<h1>Lumen</h1><p>Hi Rikza Fauzain</p>";
});

$router->get('/', 'HomeController@index');
$router->get('/about', 'AboutController@index');
$router->get('/contact', 'ContactController@index');
$router->post('/contact', 'ContactController@store');
$router->get('/users', 'UserController@getUsers');
$router->get('/users/{id}', 'UserController@getUser');

$router->get('/', function () use ($router) {
    return response()->json([
        'service_name' => 'PHP Service App',
        'status' => 'Running'
    ]);
});
