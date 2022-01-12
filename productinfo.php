<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Grand theft auto v</title>
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

        

      







   <section class="producteninfo">

            <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $query = $db->prepare("SELECT * FROM products WHERE productID = '1'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {

         echo "Title : " . $data["name"];
         echo "<br>";
         echo "manufacturer: " . $data["manufacturer"];
         echo "<br>";
         echo "price: " . "$" . $data["price"];
         echo "<br>";
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
        echo "<br>";
        echo "<img src=\"images/" . $url . ".jpg\" alt=\"" . $name . "\">";
         echo "<br>";
         echo "<br>";
         
     }
    ?>


    </section>

    <p class="beschrijving">
    “When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening
     and <br> deranged elements of the criminal underworld, the U.S. government and the entertainment industry,<br>
    they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.”
    <br>
    <br>
    As one of the most eagerly-awaited video game titles to be released in 2013, the game was widely anticipated prior to its release.<br>
     Grand Theft Auto V was released to universal acclaim, holding scores of 96 and above on MetaCritic and GameRankings, as well<br> as receiving perfect scores
      from over 30 reviewers. The game sold 11,210,000 copies and<br>
     grossed $800,000,000 on its first day of release, setting many records, and eventually making $1,000,000,000 within 3 days of the game's release. 
    
    </p>




    </main>

    <?php include 'footer.html'?>


</body>

</html>