<?php
    include_once 'Restaurant.php';

    class Table{
        private $conn;
        private $databaseTableName = 'restaurant_table';
		private $restaurantTableName;
		public function __construct($dbConn)
        {
            $this->conn = $dbConn;
			$this->restaurantTableName = Restaurant::getDatabaseTableName();
        }

        public function findTablesFromRestaurant($restaurantID)
        {
            $query ="SELECT t.ID, t.restaurantID, t.tableNumber, t.viewOrderStatus, t.callWaiterStatus, t.requestBillStatus 
				FROM $this->restaurantTableName r JOIN $this->databaseTableName t ON r.ID = t.restaurantID
				WHERE r.ID = $restaurantID";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

		public function findSpecificTableFromRestaurant($restaurantID, $tableNumber)
		{
			$query ="SELECT t.ID, t.restaurantID, t.tableNumber, t.viewOrderStatus, t.callWaiterStatus, t.requestBillStatus 
				FROM $this->restaurantTableName r JOIN $this->databaseTableName t ON r.ID = $restaurantID
				WHERE t.ID = $tableNumber";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
		}
    }
?>