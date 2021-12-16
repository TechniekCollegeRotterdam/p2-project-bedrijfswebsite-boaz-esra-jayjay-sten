<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Games</title>
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>

<body>

  <?php include 'nav.html'?>

  <main class="product-main">

  <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $query = $db->prepare("SELECT * FROM products WHERE type = 'game'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {

      echo "<fieldset></fieldset>";


         echo "title: " . $data["name"];
         echo "<br>";
         echo "genre: " . $data["genre"];
         echo "<br>";
         echo "released: " . $data["releasedate"];
         echo "<br>";
         echo "price: " . $data["price"] . "$";
         echo "<br>";
         echo "<br>";
         echo "<br>";
         
         
     }


    ?>


   

  </main>

  <?php include 'footer.html'?>


</body>

</html>