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
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

    <section class="filter-flexy">

      <form class="prijsverschil" method="post" action="prijs.php">
        <input type="number" value="minimum price" required placeholder="minimum price $" name="minimum">
        <input type="number" value="maximum price" required placeholder="maximum price $" name="maximum">
        <input type="submit" value="apply" name="verzend">
      </form>



      <form class="alphabet" method="post" action="azgame.php">
        <input type="submit" value="A - Z" name="A">
      </form>
      <form class="alphabet" method="post" action="zagame.php">
        <input type="submit" value="Z - A" name="z">
      </form>

    </section>




    <section class="phonephp">

      <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $query = $db->prepare("SELECT * FROM products WHERE type = 'games'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);


     foreach ($resultq as $data) {


      echo "<fieldset></fieldset>";
         
         echo "title: " . $data["name"];
         echo "<br>";
         echo "genre: " . $data["genre"];
         echo "<br>";
         echo  $data["url"];
         echo "<br>";
         echo "released: " . $data["releasedate"];
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