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

  // Instantiate blog post object
  $restaurant = new Restaurant($db);

  // Blog post query
  $result = $restaurant->findById(1);
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0)
  {
    // Restaurants array
    $restaurants_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
      extract($row);

      $restaurant_item = array(
        'ID' => $id,
        'name' => $name
      );

      if($shouldLoadProducts > 0)
      {
        $jsonurl = "../products/read.php";
        $json = file_get_contents($jsonurl);
        $jsonDecode = json_decode($json, true);
        echo $jsonDecode;

        $restaurant_item['products'] = null;//$products;
      }

      // Push to "data"
      array_push($restaurants_arr, $restaurant_item);
    }

    // Turn to JSON & output
    echo json_encode($restaurants_arr);

  } else {
    // No Restaurants
    echo json_encode(
      array('message' => 'No restaurant Found')
    );
  }
?>
