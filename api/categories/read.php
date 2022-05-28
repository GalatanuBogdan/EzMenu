<?php
    include_once 'repository.php';
    include_once '../../config/Database.php';
    function getCategories($restaurantID){
        $database = new Database();
        $conn = $database->connect();

        $categoryRepository = new CategoryRepository($conn);
        $categoryArray = $categoryRepository->getAllCategories($restaurantID);
        foreach ($categoryArray as $category) {
           echo $category->getName() . "<br>";
        }
    }

    getCategories(1);

?>