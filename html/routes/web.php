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

/**
 * Routes for authors
 */
$router->get('/authors','AuthorController@index');
$router->post('/authors','AuthorController@store');
$router->get('/authors/{authors}','AuthorController@show');
$router->put('/authors/{authors}','AuthorController@update');
$router->patch('/authors/{authors}','AuthorController@update');
$router->delete('/authors/{authors}','AuthorController@destroy');


/**
 * Routes for books
 */
$router->get('/books','BookController@index');
$router->post('/books','BookController@store');
$router->get('/books/{book}','BookController@show');
$router->put('/books/{book}','BookController@update');
$router->patch('/books/{book}','BookController@update');
$router->delete('/books/{book}','BookController@destroy');
