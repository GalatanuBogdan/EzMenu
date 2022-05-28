<?php
    class Restaurant{
        private $conn;
        private $table = 'restaurant';

        public $id;
        public $name;
        public $products;

        public function __construct($dbConn)
        {
            $this->conn = $dbConn;
        }

        public function findByName($restaurantName)
        {
            $query ="SELECT r.id, r.name FROM $this->table r WHERE r.name = '$restaurantName'";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

        public function findById($restaurantID)
        {
            $query ="SELECT r.id, r.name FROM $this->table r WHERE r.id = '$restaurantID'";

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }

        public function findIdByName($restaurantName)
        {
            $query = "SELECT r.id FROM $this->table r WHERE r.name = '$restaurantName' ";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>