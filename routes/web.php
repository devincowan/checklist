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

$router->get('/', function (){
 return view('index');
});

// USER ROUTES
$router->post('/login', 'LoginController@login');
$router->post('/register', 'UserController@register');
$router->get('/user', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

// LIST ROUTES
$router->post('/todo/store', 'ToDosController@store');
$router->get('/todo', 'ToDosController@get');
