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
        public function getAllCategories($restaurantId){
            $query = 'SELECT DISTINCT c.id, c.productID, c.name FROM ' . $this->table . ' c JOIN product p on 
                         p.id = c.productID JOIN restaurant r ON p.restaurantID = r.id
                         WHERE r.id = ' . $restaurantId;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

    }


?>