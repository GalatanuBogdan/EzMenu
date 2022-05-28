<?php
include_once '../../config/Database.php';
include_once 'repository.php';
if (isset($_POST['submit'])) {
    $database = new Database();
    $conn = $database->connect();

    $name = $_POST['name'];
    $repository = new AllergenRepository($conn);
    $repository->insertAllergens($name);
}