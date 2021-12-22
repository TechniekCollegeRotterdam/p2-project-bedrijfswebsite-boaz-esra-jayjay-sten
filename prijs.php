<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>laptops</title>
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

  <?php include 'nav.html'?>

  <main class="product-main">
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

    <section class="laptopphp">

      <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $minimum = $_POST['minimum'];
     $maximum = $_POST['maximum'];


     $query = $db->prepare("SELECT * FROM products WHERE 'price' BETWEEN $minimum AND $maximum");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {

         echo "<fieldset></fieldset>";
         echo "name: " . $data["name"];
         echo "<br>";
         echo "manufacturer: " . $data["manufacturer"];
         echo "<br>";
         echo "brand : " . $data["brand"];
         echo "<br>";
         echo "model : " . $data["model"];
         echo "<br>";
         echo "price: " . "$" . $data["price"];
         echo "<br>";
         $name = $data["model"];
         // Make lower case
         $url = strtolower($name);
         //Make alphanumeric
         $url = preg_replace("/[^a-z0-9\s-]/", "", $url);
        //Clean up multiple dashes or whitespaces
        $url = preg_replace("/[\s-]+/", " ", $url);
        //Convert whitespaces and underscore to dash
        $url = preg_replace("/[\s]/", "-", $url);
        echo "<img src=\"images/" . $url . ".jpg\" alt=\"" . $name . "\">";
         echo "<br>";
         echo "<br>";
        
     }


    ?>

    </section>





  </main>

  <?php include 'footer.html'?>


</body>

</html>