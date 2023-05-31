<?php

require_once 'app/config/config.php';

require_once ROOT_PATH.'/router/Router.php';

$router = new Router();

require_once ROOT_PATH.'/router/routes.php';

$router->handleRequest();