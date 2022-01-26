<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Battlefield 2042</title>
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

     $query = $db->prepare("SELECT * FROM products WHERE productID = '10'");
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
            <b>Moderne setting</b><br>
            Battlefield 2042 gaat over moderne uitrusting en soldaten. De nieuwe Battlefield heeft heel veel weg van
            Battlefield 4. Voor veel Battlefield fans is dat heel goed nieuws. Het is 8 jaar geleden dat de geliefde
            game BF 4 gereleased werd.<br><br>
            <b>Extreme weersomstandigheden</b><br>
            In BF2042 voeren weersomstandigheden de strijd verder op. Er is een realistische dag-en-nacht cyclus. Dit
            houdt in dat elk etmaal weer nieuwe uitdagingen met zich meebrengt. Het weer is dynamisch: tijdens een
            missie beland je bijvoorbeeld in een tornado. Zo spelen de game ontwikkelaars in op de trend om de setting
            een grotere rol te geven, bijna als een extra personage, waarmee ze de verhaallijn nog gelaagder maken.<br><br>
            <b>128 spelers</b><br>
            Ook komen er 7 grotere multiplayer mappen dan ooit. Die mappen ondersteunen 128 spelers. Het belooft een
            ware digitale oorlog te worden, wanneer de strijd ter land, ter zee en in de lucht losbarst.<br><br>
            <b>Cross-gen release</b><br>
            Naast de release op pc, is Battlefield 2042 ook beschikbaar komen voor de PlayStation 5, Xbox Series X/S, de
            PS4 en Xbox One. Op de next-gen consoles profiteer je van ray tracing, waardoor de game er realistischer
            uitziet. Ray tracing zorgt ervoor dat de belichting, schaduwen en reflecties er heel natuurgetrouw uitzien.
            Al met al is Battlefield 2042 een heel gedetailleerde game.<br><br>
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