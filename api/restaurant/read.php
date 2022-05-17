<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Restaurant.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Restaurant($db);

  // Blog post query
  $result = $post->read(1);
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $restaurants_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $restaurant_item = array(
        'ID' => $id,
        'name' => $name
      );

      // Push to "data"
      array_push($restaurants_arr, $restaurant_item);
    }

    // Turn to JSON & output
    echo json_encode($restaurants_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No restaurant Found')
    );
  }
