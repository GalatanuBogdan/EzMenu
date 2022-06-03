<?php
    class Category{
        private $productId;
        private $name;
        private $conn;
        private $table = 'categories';

        public function __construct($dbConn)
        {
            $this->conn = $dbConn;
        }

        /*returns all the categories from the database*/
        public function getAllCategories($restaurantID){
            $query = "SELECT DISTINCT c.id, c.restaurantID, c.name FROM $this->table c WHERE c.restaurantID = $restaurantID";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

    }


?>