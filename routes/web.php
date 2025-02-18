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

$router->get("/", function () { //root route
    return response()->json([
        "message" => "Hello World"
    ]);
});

$router->get('/users', 'UserController@index');      // GET all users
$router->get('/users/{id}', 'UserController@show'); // GET user by ID
$router->post('/users', ['middleware' => 'ValidateUser', 'uses' => 'UserController@store']);    // POST new user
$router->put('/users/{id}', ['middleware' => 'ValidateUser', 'uses' => 'UserController@update']); // UPDATE user
$router->delete('/users/{id}', 'UserController@destroy'); // DELETE user
