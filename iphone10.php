<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apple Iphone 10</title>
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

     $query = $db->prepare("SELECT * FROM products WHERE productID = '12'");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {


         echo "Title : " . $data["name"];
         echo "<br>";
         echo "manufacturer: " . $data["manufacturer"];
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
        echo "<br>";
        echo "<img src=\"images/" . $url . ".jpg\" alt=\"" . $name . "\">";
         echo "<br>";
         echo "<br>";
         
         
     }

    ?>


        </section>

        <p class="beschrijving">
            iPhone X Space Gray 256GB is de eerste generatie zonder home button. Het grote scherm bedekt de hele
            voorkant van het toestel.<br> Deze telefoon ontgrendel je met Face ID. Het toestel maakt een scan van je gezicht
            en ontgrendelt de telefoon zodra hij je herkent.<br> Foto's maak je met de dubbele 12 megapixel camera met
            optische beeldstabilisatie. Deze camera levert scherpe foto's af, ook als je het toestel enigszins beweegt
            en bij weinig licht.<br> Voor het eerst beschikt op iPhone X zowel de voor- als achterkant over portretmodus.
            Bovendien laad je dit toestel draadloos op, dankzij de glazen achterkant.<br><br>
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

            <p>Give your feedback.</p>

            <textarea form="comform" name="comment" placeholder="feedback here. " required rows="4"
                cols="50"></textarea>

            <section class="submit-reset">
                <input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
            </section>







        </form>



    </main>

    <?php include 'footer.html'?>


</body>

</html>