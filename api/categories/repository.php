<?php
    include_once '../../models/Category.php';
    class CategoryRepository{
        private $table = "categories";
        private $conn;

        public function __construct($dbConn){
            $this->conn = $dbConn;
        }

        /*returns all the categories from the database*/
        public function getAllCategories($restaurantId){
            $query = 'SELECT DISTINCT a.name FROM ' . $this->table . ' a join product p on 
                         p.id = a.productID join restaurant r on p.restaurantID = r.id
                         WHERE r.id = ' . $restaurantId;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $categories = array();
            while($categoryRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $name = $categoryRow['name'];
                $category = new Category($name);
                array_push($categories, $category);
            }
            return $categories;
        }
    }
?>