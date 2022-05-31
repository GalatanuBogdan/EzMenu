<?php
    class Restaurant{
        private $conn;
        private static $DatabaseTableName = 'restaurant';

        public $id;
        public $name;
        public $products;

        public function __construct($dbConn)
        {
            $this->conn = $dbConn;
        }

        public function findByName($restaurantName)
        {
            $query ="SELECT r.id, r.name FROM $this->DatabaseTableName r WHERE r.name = '$restaurantName'";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

        public function findById($restaurantID)
        {
            $query ="SELECT r.id, r.name FROM " . Restaurant::getDatabaseTableName() . " r WHERE r.id = '$restaurantID'";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

        public function findIdByName($restaurantName)
        {
            $query = "SELECT r.id FROM " . Restaurant::getDatabaseTableName() . " r WHERE r.name = '$restaurantName' ";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        public static function getDatabaseTableName()
        {
            return self::$DatabaseTableName;
        }
    }
?>