<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link id="pagestyle" rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

  <?php include 'nav.html'?>

  <main class="product-index">
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

    <section class="saturn-logo">
      <img src="images/saturnus-logo.png">
    </section>

    <section class="index-title">
      <h1>Most popular products!</h1>
    </section>


    <section class="index-sold">



      <?php 
   // leg verbinding met database
   require_once("dbconnsaturnus.php");

   $query = $db->prepare("SELECT * FROM products WHERE sold > '5000'");
   $query->execute();
   $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

  //  product echo


  foreach ($resultq as $data) {


     echo "title: " . $data["name"];
     echo "<br>";
     echo "manufacturer: " . $data["manufacturer"];
     echo "<br>";
     echo "brand: " . $data["brand"];
     echo "<br>";
     echo $data["sold"] . " copies sold";
     echo "<br>";
     echo "price: " . "$" . $data["price"];
     echo "<br>" . "<section></section>";
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
    
     echo "<br>" . "<section></section>";

  }


   ?>


    </section>
    

  </main>

  <?php include 'footer.html'?>


</body>

</html>