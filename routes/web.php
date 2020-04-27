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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('activities', ['uses' => 'ActivityController@showAllActivities']);
    $router->get('activities/{id}', ['uses' => 'ActivityController@showOneActivity']);
    $router->post('activities', ['uses' => 'ActivityController@create']);
    $router->delete('activities/{id}', ['uses' => 'ActivityController@delete']);
    $router->put('activities/{id}', ['uses' => 'ActivityController@update']);

    $router->get('employees', ['uses' => 'EmployeeController@showAllEmployees']);
    $router->get('employees/{id}', ['uses' => 'EmployeeController@showOneEmployee']);
    $router->post('employees', ['uses' => 'EmployeeController@create']);
    $router->delete('employees/{id}', ['uses' => 'EmployeeController@delete']);
    $router->put('employees/{id}', ['uses' => 'EmployeeController@update']);
});

