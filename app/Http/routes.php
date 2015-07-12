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

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->post('gitlab/hook', [
	'as' => 'hook', 'uses' => 'GitlabController@hookHandler'
]);

$app->get('gitlab/user/{id}', [
    'as' => 'get-user', 'uses' => 'UserController@getGitUser'
]);

$app->post('gitlab/user/create', [
    'as' => 'create-user', 'uses' => 'UserController@createUserList'
]);