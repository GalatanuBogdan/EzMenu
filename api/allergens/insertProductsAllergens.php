<?php
include_once '../../config/Database.php';
include_once 'repository.php';
if (isset($_POST['submit'])) {
    $database = new Database();
    $conn = $database->connect();

    $productId = $_POST['productId'];
    $allergenId = $_POST['allergenId'];
    
    $repository = new AllergenRepository($conn);
    $repository->insertProductAllergens($productId, $allergenId);
}