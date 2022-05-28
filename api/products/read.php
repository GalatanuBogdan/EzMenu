<?php 
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Product.php';
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $product = new Product($db);

    //take params
    $restaurantID=$_GET['restaurantID'] ?? null;
    $products_arr = array();

    if($restaurantID){
      $products_arr = FindRestaurantProducts($restaurantID, $db);
    }
    
    // Turn to JSON & output
    echo json_encode($products_arr); 
      
  function FindRestaurantProducts($restaurantID, $db)
  {
    $productDAO = new Product($db);

    $productsResult = $productDAO->findAllProductsByRestaurantId($restaurantID);
  
    $productsNum = $productsResult->rowCount();

    // Restaurants array
    $products_array = array();

    // Check if any posts
    if($productsNum > 0)
    {
      while($productRow = $productsResult->fetch(PDO::FETCH_ASSOC))
      {
        extract($productRow);

        $product_item = array(
          'ID' => $ID,
          'restaurantID' => $restaurantID,
          'title' => $title,
          'price' => $price,
          'description' => $description,
          'cantity' => $cantity,
          'disponibility' => $disponibility
        );

        // Push to "data"
        array_push($products_array, $product_item);
      }
    }
    return $products_array;
  }
