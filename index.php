<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EzMenu</title>
</head>
<body>
    <button action = "http://localhost/EzMenu/api/restaurant/read.php" type="Get" method="GET">Get a restaurant</button>
    <?php
    include('.\config\Database.php');
    // Check connection
    $dbManager = new Database();
    $conn = $dbManager->connect();
    ?>
</body>

</html>