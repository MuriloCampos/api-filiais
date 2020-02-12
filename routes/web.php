<?php

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

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api', 'middleware' => 'autenticador'], function() use ($router){
    $router->group(['prefix' => 'filiais'], function () use ($router) {
        $router->get('', 'FiliaisController@index');
        $router->get('{id}', 'FiliaisController@show');
        $router->post('', 'FiliaisController@store');
        $router->put('{id}', 'FiliaisController@update');
        $router->delete('{id}', 'FiliaisController@destroy');
    });

    $router->group(['prefix' => 'usuarios'], function () use ($router){
        $router->get('', 'UsuariosController@index');

    });


});

$router->post('/api/login', 'TokenController@gerarToken');
$router->post('/api/usuarios', 'UsuariosController@store');

//, 'middleware' => 'autenticador'
