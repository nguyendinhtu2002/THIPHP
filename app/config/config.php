<?php
define('ROOT_PATH',dirname(__DIR__));
$rootApp = $_SERVER['SCRIPT_NAME'];
$basePath = '/' . trim(str_replace('\\', '/', dirname($rootApp)), '/');
define('BASE_PATH',$basePath);
