<?php
    include_once 'repository.php';
    include_once '../../config/Database.php';
    function getAllergens($productId){
        $database = new Database();
        $conn = $database->connect();

        $allergenRepository = new AllergenRepository($conn);
        $allergenArray = $allergenRepository->getAllergensOfProduct($productId);
        foreach ($allergenArray as $allergen) {
           echo $allergen->getProductId() . $allergen->getName() . "<br>";
        }
    }

    getAllergens(1);


?>