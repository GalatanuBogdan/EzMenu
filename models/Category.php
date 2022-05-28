<?php
    class Category{
        private $productId;
        private $name;

        public function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function getProductId(){
            return $this->productId;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setId($id){
            $this->id = $id;
        }

    }


?>