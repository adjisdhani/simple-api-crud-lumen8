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

$router->group(['prefix' => 'api/posts'], function () use ($router) {
    $router->get('/', 'PostController@index');    // Menampilkan semua post
    $router->post('/', 'PostController@store');   // Menambahkan post baru
    $router->get('/{id}', 'PostController@show'); // Menampilkan post berdasarkan ID
    $router->put('/{id}', 'PostController@update'); // Memperbarui post
    $router->delete('/{id}', 'PostController@destroy'); // Menghapus post
});
