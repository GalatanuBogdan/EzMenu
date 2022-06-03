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
$loadProducts = $_GET['loadProducts'] ?? 1;
$loadCategories = $_GET['loadCategories'] ?? 1;
$loadTables = $_GET['loadTables'] ?? 1;
$restaurantName=$_GET['restaurantName'] ?? null;
$restaurantID=$_GET['restaurantID'] ?? null;


$restaurant_items = array();

if($restaurantName)
{
    //if we request an restaurant by name, we need its id from the database
    $result = $restaurant->findIdByName($restaurantName);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($row)
    {
        extract($row);
        $restaurantID = $id;
    }
}

$result = null;
if($restaurantID)
    $result = $restaurant->findById($restaurantID);

if ($result != null && $result->rowCount() > 0)
{
    $row = $result->fetch(PDO::FETCH_ASSOC);
    extract($row);

    $restaurant_items = array(
        'ID' => $id,
        'name' => $name,
        'products' => array(),
        'categories' => array(),
        'tables' => array()
    );

    if ($loadProducts)
    {
        $productsApiRequest = file_get_contents("http://localhost/EzMenu/api/products/read.php?restaurantID=$restaurantID");
        $products = json_decode($productsApiRequest, true);
        $restaurant_items['products'] = $products;
    }

    if($loadCategories)
    {
        $categoriesApiRequest = file_get_contents("http://localhost/EzMenu/api/categories/read.php?restaurantID=$restaurantID");
        $categories = json_decode($categoriesApiRequest, true);
        $restaurant_items['categories'] = $categories;
    }

    if($loadTables)
    {
        $tablesApiRequest = file_get_contents("http://localhost/EzMenu/api/tables/read.php?restaurantID=$restaurantID");
        $tables = json_decode($tablesApiRequest, true);
        $restaurant_items['tables'] = $tables;
    }

    //to do: allergens
}

echo json_encode($restaurant_items);

?>
