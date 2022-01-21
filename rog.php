<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Asus ROG scar 17</title>
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

     $query = $db->prepare("SELECT * FROM products WHERE productID = '19'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {

        echo "manufacturer: " . $data["manufacturer"];
        echo "<br>";
        echo "brand : " . $data["brand"];
        echo "<br>";
        echo "model : " . $data["model"];
        echo "<br>";
        echo "cpu: " . $data["processor"];
        echo "<br>";
        echo "graphicscard: " . $data["graphicscard"];
        echo "<br>";
        echo "ram: " . $data["memory"];
        echo "<br>";
        echo "disk: " . $data["space"];
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

        <p class="beschrijving">
            Gerichte vuurkracht stroomlijnt en verbetert de kern van de Windows 10 gaming-beleving in de ROG Strix SCAR
            17 G733QS-K4200T.<br>
            Met een krachtige AMD Ryzen 9 5900HX CPU en GeForce RTX 3080 GPU loopt alles, van gaming tot multitasking,
            snel en soepel.<br>
            Geef vol gas op esports-snelheid met een competitieklasse-beeldscherm tot 165Hz/3ms. Adaptive-Sync maakt
            gameplay ultravloeiend,<br>
            terwijl geavanceerde thermische upgrades je helpen om koel te blijven onder druk. Het maakt niet uit wat je
            game is, je kunt je perfecte spel bereiken.<br>
        </p>


        <h2 class="titelklacht">Reviews</h2>


        <form class="klachtform2" id="comform" method="post" action="reviewresult.php">

            <section class="names">
                <label name="name">Full name</label>
                <input type="text" placeholder="John" required name="fname">
            </section>
            <section class="date">
                <label for="purchasedate">Date of Purchase</label>
                <input type="date" id="purchase" required name="purchasedate">
            </section>
            <section class="emails">
                <label name="mail">Email *</label>
                <input type="mail" placeholder="Someone@123.com" required name="mail">
            </section>
            <section class="radiofeed-btn">
                <label name="feedradio">How do you experience your product?</label>
                1 ★<input type="radio" name="feedradio" value="★">
                2 ★★<input type="radio" name="feedradio" value="★★">
                3 ★★★<input type="radio" name="feedradio" value="★★★">
                4 ★★★★<input type="radio" name="feedradio" value="★★★★">
                5 ★★★★★<input type="radio" name="feedradio" value="★★★★★">
            </section>

            <section class="feedback">
                <p>Give your feedback.</p>

                <textarea form="comform" name="comment" placeholder="feedback here. " required rows="4"
                    cols="50"></textarea>
            </section>
            
            <section class="submit-reset">
                <input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
            </section>







        </form>



    </main>

    <?php include 'footer.html'?>


</body>

</html>