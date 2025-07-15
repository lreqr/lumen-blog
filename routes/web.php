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

$router->group(['prefix' => 'books'], function () use ($router) {
   $router->get('/', 'BooksController@index');
   $router->get('/{id}', 'BooksController@show');
   $router->post('/create', 'BooksController@create');
   $router->put('/update/{id}', 'BooksController@update');
   $router->delete('/delete/{id}', 'BooksController@destroy');
});
