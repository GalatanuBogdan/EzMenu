<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EzMenu</title>
</head>
<body>

<?php
        $getRestaurantApiRequest = file_get_contents('http://localhost/EzMenu/api/restaurants/read.php');
        $resraurantResult = json_decode($getRestaurantApiRequest, true);
        echo "<div>" . $resraurantResult['name'] . "</div>";

        $products = $resraurantResult['products'];

        for($i=0;$i<count($products);$i++)
        {
            echo "<div style=\"border-radius:10px;width: 300px; background-color:grey;\">";
            echo "<p>" . $products[$i]['title']. "</p>";
            echo "<p>" . $products[$i]['description']. "</p>";
            echo "<p>" . $products[$i]['price']. " lei</p>";
            echo "<p>" . $products[$i]['cantity']. " grame</p>";
            echo "</div>";
        }

?>


</body>

</html>