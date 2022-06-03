<?php
    include_once '../../config/Database.php';
    include_once '../../models/Category.php';

    $restaurantID=$_GET['restaurantID'] ?? null;

    function getCategories($restaurantID){

        if($restaurantID == null)
            return array();

        $database = new Database();
        $conn = $database->connect();

        $categoryDAO = new Category($conn);
        $result = $categoryDAO->getAllCategories($restaurantID);

        $categories = array();

        if ($result != null && $result->rowCount() > 0)
        {
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                extract($row);

                $category = array(
                    'ID' => $id,
                    'restaurantID' => $restaurantID,
                    'name' => $name
                );

                array_push($categories, $category);
            }
        }

        return $categories;
    }

    echo json_encode(getCategories($restaurantID));

?>