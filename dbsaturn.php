<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saturnus</title>
</head>
<body>
    <?php
    // leg verbinding met database
     require_once("dbconn-saturn.php");

     $query = $db->prepare("SELECT * FROM laptops");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {
         echo "geheugen: " . $data["memory"];
         echo "<br>";
         echo "grafische kaart: " . $data["graphicscard"];
         echo "<br>";
         echo "maker: " . $data["manufacturer"];
         echo "<br>";
         
         
     }


    ?>

    
</body>
</html>