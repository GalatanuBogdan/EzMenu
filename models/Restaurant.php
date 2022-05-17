<?php
    class Restaurant{
        private $conn;
        private $table = 'restaurant';

        public $id;
        public $name;
        public $products;
        public $restaurantTables;

        public function __construct($dbConn)
        {
            $this->conn = $dbConn;
        }

        public function read($restaurantID)
        {
            $query = 'SELECT 
            r.id,
            r.name
            FROM
            ' . $this->table . ' r
            WHERE r.ID = ' . $restaurantID;

            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }


    }
?>