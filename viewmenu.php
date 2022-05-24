<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>ViewMenu</title>
</head>
<body>

<div class="menu-top-bar">
    <div class="menu-top-bar-restaurant-text-container">  
        <div class="menu-top-bar-restaurant-name">
            Mama mia
        </div>
        <div class="menu-top-bar-restaurant-table-number">
            staying on the table #20
        </div>
    </div>

    <div class="menu-top-bar-restaurant-request-container">  
        <div class="menu-top-bar-view-orders-section">
            view order products
            <button class="request-restaurant-service-btn"></button>
        </div>

        <div class="menu-top-bar-call-waiter-section">
            call waiter
            <button class="request-restaurant-service-btn"></button>
        </div>
        
        <div class="menu-top-bar-ask-for-the-bill-section">
            ask for the bill
            <button class="request-restaurant-service-btn"></button>
        </div>
    </div> 
</div>

<!-- <?php
        $getRestaurantApiRequest = file_get_contents('http://localhost/EzMenu/api/restaurants/read.php');
        $resraurantResult = json_decode($getRestaurantApiRequest, true);
        echo"<div class=\"menu-top-bar\">" .
        
        "<div class=\"menu-top-bar-restaurant-title\">" . $resraurantResult['name'] . "</div>" . 
        "<div class=\"menu-top-bar-restaurant-table-number\"> staying on the table #20 </div>" . 
        "</div>";

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

?> -->


</body>

</html>