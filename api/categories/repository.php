<?php
    include_once '../../models/Category.php';
    class CategoryRepository{
        private $table = "categories";
        private $conn;

        public function __construct($dbConn){
            $this->conn = $dbConn;
        }

        /*returns all the categories from the database*/
        public function getAllCategories(){
            $query = 'SELECT c.productID, c.name FROM ' . $this->table . ' c ';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $categories = array();
            while($productRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $id = $productRow['productID'];
                $name = $productRow['name'];
                $category = new Category($id, $name);
                array_push($categories, $category);
            }
            return $categories;
        }
    }
?>