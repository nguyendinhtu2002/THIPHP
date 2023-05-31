<?php


require_once ROOT_PATH.'/service/ProductService.php';
require_once ROOT_PATH.'/service/CategoryService.php';

class HomeController
{
    public function index()
    {
        $products = ProductService::getALL();
        include(ROOT_PATH.'/views/index.php');
    }

    public  function getDetails(){
        $products = ProductService::getDetails();
        $categorys = CategoryService::getALL();

        include(ROOT_PATH.'/views/edit.php');
    }
    public  function delete(){
        $products = ProductService::deleteArticle();
        include(ROOT_PATH.'/views/index.php');
    }
    public  function Update(){
        $articles = ProductService::updateArticle();
        include(ROOT_PATH.'/Views/edit.php');
    }

}