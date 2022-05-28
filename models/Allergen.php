<?php
    class Allergen{
        private $id;
        private $productID;
        private $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function getProductID(){
            return $this->productID;
        }

        public function getId(){
            return $this->id;
        }

    }

?>