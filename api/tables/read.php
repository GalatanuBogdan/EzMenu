<?php 
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Table.php';
    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //take params
    $restaurantID=$_GET['restaurantID'] ?? null;
    $tableNumber=$_GET['tableNumber'] ?? null;

    $tables_arr = array();

    if($restaurantID ){
		//if $tableNumber is null, all tables Should be returned
		$tables_arr = FindRestaurantTables($restaurantID, $tableNumber, $db);
	}
    
    // Turn to JSON & output

	if(count($tables_arr) == 1)
		echo json_encode($tables_arr[0]); 
    else
		echo json_encode($tables_arr); 



	//get a specific table from a restaurant
  function FindRestaurantTables($restaurantID, $tableNumber, $db)
  {
    // Instantiate table object
	$tableDAO = new Table($db);

    $queryResult = null;

	if($restaurantID)
	{
		//when tableNumber is null, we return all infos
		if($tableNumber == null)
		{
			$queryResult = $tableDAO->findTablesFromRestaurant($restaurantID);
		}
		else
		{
			$queryResult = $tableDAO->findSpecificTableFromRestaurant($restaurantID, $tableNumber);
		}
	}
	else
	{
		exit();
		echo array();
	}
    $tablesNum = $queryResult->rowCount();

    // tables array
    $tables_array = array();

    // Check if any posts
    if($tablesNum > 0)
    {
      while($tableRow = $queryResult->fetch(PDO::FETCH_ASSOC))
      {
        extract($tableRow);

        $table_item = array(
          'ID' => $ID,
          'restaurantID' => $restaurantID,
          'tableNumber' => $tableNumber,
          'viewOrderStatus' => $viewOrderStatus,
          'callWaiterStatus' => $callWaiterStatus,
          'requestBillStatus' => $requestBillStatus
        );

        // Push to "data"
        array_push($tables_array, $table_item);
      }
    }
    return $tables_array;
  }
