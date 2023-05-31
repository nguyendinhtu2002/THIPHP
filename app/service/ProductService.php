<?php

require_once ROOT_PATH.'/models/Product.php';
require_once ROOT_PATH.'/config/ConnectDatabase.php';
class ProductService
{
public static function getALL(){
    $database = new ConnectDatabase();
    $pdo = $database->getConnection();
    $query = "SELECT * FROM product";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $products = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['status'], $row['category_id'], $row['image_url']);


        $products[] = $product;
    }

    return $products;
}

}