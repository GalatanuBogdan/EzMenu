<?php
include_once '../../config/Database.php';
include_once '../../models/Product.php';
if (isset($_POST['submit'])) {
    $database = new Database();
    $conn = $database->connect();

    $productId = $_POST['productId'];
    $name = $_POST['name'];

    /*checks if product exits*/
    $product = new Product($conn);
    $existence = $product->checkProductExistence($productId);
    if($existence == 1){
        $stmt = $conn->prepare("INSERT INTO categories (productId, name) 
                            VALUES (:productId, :name)");
        $stmt->bindParam(':productId', $productId);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        echo "Category added successfully!";
    }
    else{
        echo "This prodcut doesn't exist!";
    }

    
}