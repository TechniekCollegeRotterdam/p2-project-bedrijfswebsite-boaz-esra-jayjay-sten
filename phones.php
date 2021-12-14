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

    <main class="phone-main">
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

        <section class="phonephp">

    
     <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $query = $db->prepare("SELECT * FROM products WHERE type = 'phone'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {


        echo "<fieldset></fieldset>";



         echo "manufacturer: " . $data["manufacturer"];
         echo "<br>";
         echo "brand : " . $data["brand"];
         echo "<br>";
         echo "model : " . $data["model"];
         echo "<br>";
         echo "price : " . $data["price"] . "$";
         echo "<br>";
         echo "<br>";
         echo "<br>";
         
         
     }


    ?>

        </section>




    </main>

    <?php include 'footer.html'?>


</body>

</html>