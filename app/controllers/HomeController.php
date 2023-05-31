<?php


require_once ROOT_PATH.'/service/ProductService.php';
class HomeController
{
    public function index()
    {
        $products = ProductService::getALL();
        include(ROOT_PATH.'/views/index.php');
    }
}