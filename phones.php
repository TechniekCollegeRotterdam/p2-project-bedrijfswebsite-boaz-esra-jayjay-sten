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

        <section class="phonephp">

        

    
     <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");

     $query = $db->prepare("SELECT * FROM products WHERE type = 'phone'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {

        echo "<fieldset></fieldset>";
       
         $model = $data["model"];
         $url = strtolower($model);
         $url = preg_replace("/[^a-z0-9\s-]/", "", $url);
         $url = preg_replace("/[\s-]+/", " ", $url);
         $url = preg_replace("/[\s]/", "-", $url); 

         echo "manufacturer: " . $data["manufacturer"];
         echo "<br>";
         echo "brand : " . $data["brand"];
         echo "<br>";
         echo "model : " . $data["model"];
         echo "<br>";
         echo "price : " . "$" . $data["price"];
         echo "<br>";
         echo "<img src=\"phone-imgs/" . $url . ".jpg\" class=\"product-img\">";
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