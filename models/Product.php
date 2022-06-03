<?php
    class Product{
        private $conn;
        private $table = 'product';

        public $ID;
        public $restaurantID;
        public $title;
        public $price;
        public $imageURL;
        public $previewDescription;
        public $description;
        public $cantity;
        public $disponibility;

        public function __construct($dbConn)
        {
            $this->conn = $dbConn;
        }

        public function findAllProductsByRestaurantId($restaurantID)
        {
            $query = 'SELECT 
            p.ID,
            p.restaurantID,
            p.title,
            p.price,
            p.imageURL,
            p.previewDescription,
            p.description,
            p.cantity,
            p.disponibility,
            p.categories,
            p.allergens
            FROM
            ' . $this->table . ' p
            WHERE p.restaurantID = ' . $restaurantID;
            
            //prepare statement
            $stmt = $this->conn->prepare($query);

            //execute query
            $stmt->execute();

            return $stmt;
        }


    }
?>