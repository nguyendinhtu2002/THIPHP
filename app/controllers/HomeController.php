<?php


require_once ROOT_PATH.'/service/ProductService.php';
class HomeController
{
    public function index()
    {
        $products = ProductService::getALL();
        include(ROOT_PATH.'/views/index.php');
    }

    public  function getDetails(){
        $products = ProductService::getDetails();
        include(ROOT_PATH.'/views/index.php');
    }
    public  function delete(){
        $products = ProductService::deleteArticle();
        include(ROOT_PATH.'/views/index.php');
    }
}