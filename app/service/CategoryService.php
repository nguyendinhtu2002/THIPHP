<?php

require_once ROOT_PATH.'/models/Category.php';
require_once ROOT_PATH.'/config/ConnectDatabase.php';

class CategoryService
{
    public static function getALL(){
        $database = new ConnectDatabase();
        $pdo = $database->getConnection();
        $query = "SELECT * FROM category";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $products = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Category($row['id'], $row['name']);


            $products[] = $product;
        }

        return $products;
    }

}