<?php
// router/routes.php
require_once 'Router.php';

$router = new Router();

$router->get(BASE_PATH.'/', 'HomeController@index');
$router->get(BASE_PATH.'/edit/{id}', 'HomeController@getDetails');
$router->get(BASE_PATH.'/delete/{id}', 'HomeController@delete');
