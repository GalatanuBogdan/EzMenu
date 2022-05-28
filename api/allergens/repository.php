<?php
    include_once '../../models/Allergen.php';
    class AllergenRepository{
        private $table = "allergens";
        private $conn;

        public function __construct($dbConn){
            $this->conn = $dbConn;
        }

        /*returns the allergens of a product*/
        public function getAllergensOfProduct($productId){
            $query = 'SELECT a.name FROM ' . $this->table . ' a join product_allergens p
                on p.allergen_id = a.id where p.product_id = ' . $productId;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $allergens = array();
            while($allergenRow = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $name = $allergenRow['name'];
                $allergen = new Allergen($name);
                array_push($allergens, $allergen);
            }
            return $allergens;
        }

        public function insertProductAllergens($productId, $allergenId){
            $stmt = $this->conn->prepare("INSERT INTO product_allergens (product_id, allergen_id) 
                            VALUES (:product_id, :allergen_id)");
            $stmt->bindParam(':product_id', $productId);
            $stmt->bindParam(':allergen_id', $allergenId);
            $stmt->execute();
            echo "Allergen-Product Link added successfully!";
        }

        public function insertAllergens($name){
            $stmt = $this->conn->prepare("INSERT INTO allergens (name) 
                            VALUES (:name)");
            $stmt->bindParam(':name', $name);
            $stmt->execute();
            echo "Allergen added successfully!";
        }

    }

?>