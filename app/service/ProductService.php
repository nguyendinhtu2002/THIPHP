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
    public static function  getDetails(){
        $router = new Router();
        $id = $router->extractIdFromUrl($_SERVER['REQUEST_URI']);

        try{
            $database = new ConnectDatabase();
            $pdo = $database->getConnection();
            if($pdo!=null){
                $sql = "SELECT * FROM product WHERE id = :id ";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();

                $products = [];
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $product = new Product($row['id'], $row['name'], $row['description'], $row['price'], $row['status'], $row['category_id'], $row['image_url']);

                    $products[] = $product;
                }

                return $products;
            }
        }
        catch (ErrorException $error){

        }

    }
    public static function deleteArticle(){
        $router = new Router();
        $id = $router->extractIdFromUrl($_SERVER['REQUEST_URI']);
        try {
            $id = trim($_POST['id']);
            $database = new ConnectDatabase();
            $pdo = $database->getConnection();
            $sql = "DELETE FROM product WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute()) {
                echo "<script>alert('PRODUCT delete successfully.');</script>";
                header("Location: /" .BASE_PATH);
            } else {
                $errorMessage = "Error delete product: " . $stmt->errorInfo()[2];
                echo "<script>alert('$errorMessage');</script>";
            }
        }catch (ErrorException $e){

        }
    }
    public static function updateArticle(){
        $router = new Router();
        $id = $router->extractIdFromUrl($_SERVER['REQUEST_URI']);
        try{
            $database = new ConnectDatabase();
            $pdo = $database->getConnection();
            if($pdo!=null){
                $title = trim($_POST['title']);
                $content = trim($_POST['content']);
                $summary = trim($_POST['summary']);
                $category_id = trim($_POST['category_id']);
                $member_id = trim($_POST['member_id']);
                $published = trim($_POST['published']);
                if (empty($title) || empty($summary) || empty($content) || empty($category_id)||empty($member_id)||empty($published)) {
                    echo "<script>alert('Please enter all required fields');</script>";

                    return;
                }
                $sql = "UPDATE product SET title = :title, content = :content,summary= :summary,category_id = :category_id, member_id = :member_id, published = :published WHERE id = :id";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':category_id', $category_id);
                $stmt->bindParam(':summary', $summary);
                $stmt->bindParam(':member_id', $member_id);
                $stmt->bindParam(':published', $published);
                $stmt->bindParam(':id', $id);
                if ($stmt->execute()) {
                    echo "<script>alert('Article updated successfully.');</script>";
                    header("Location: /test/users");
                    exit();
                } else {
                    echo "<script>alert('Error updating article: " . $stmt->errorInfo()[2] . "');</script>";
                }
            }
        }
        catch (ErrorException $error){

        }
    }

}