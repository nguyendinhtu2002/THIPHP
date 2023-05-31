<?php
// router/routes.php
require_once 'Router.php';

$router = new Router();

$router->get(BASE_PATH.'/', 'HomeController@index');
