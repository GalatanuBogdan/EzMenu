<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Restaurant.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$restaurant = new Restaurant($db);

//$param=$_GET['param'] ?? null; // take param, else if param is missing $param = 1
//take params
$loadProducts = $_GET['loadProducts'] ?? true;
$restaurantName=$_GET['restaurantName'] ?? null;

$restaurant_items = array();

if($restaurantName){
    $result = $restaurant->findByName($restaurantName);

    if ($result->rowCount() > 0)
    {
        $row = $result->fetch(PDO::FETCH_ASSOC);

        extract($row);

        $restaurant_items = array(
            'ID' => $id,
            'name' => $name,
            'products' => array()
        );

        if ($loadProducts)
        {
            $result = $restaurant->findIdByName($restaurantName);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            extract($row);
            $restaurantID = $id;
            $productsApiRequest = file_get_contents("http://localhost/EzMenu/api/products/read.php?restaurantID=$restaurantID");
            $products = json_decode($productsApiRequest, true);
            $restaurant_items['products'] = $products;
        }
    }
}

echo json_encode($restaurant_items);

?>
