<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Restaurant.php';
// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

$shouldLoadProducts = true; //temp hardcoded. Should come in as a param


$restaurant = new Restaurant($db);

$result = $restaurant->findById(1);

if ($result->rowCount() > 0)
{
    $row = $result->fetch(PDO::FETCH_ASSOC);

    extract($row);

    $restaurant_item = array(
        'ID' => $id,
        'name' => $name
    );

    if ($shouldLoadProducts > 0)
    {
        $productsApiRequest = file_get_contents('http://localhost/EzMenu/api/products/read.php');
        $products = json_decode($productsApiRequest, true);
        $restaurant_item['products'] = $products;
    }

    echo json_encode($restaurant_item);
}
else
{
    echo json_encode(array(
        'message' => 'No restaurant Found'
    ));
}
?>
