<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Forza Horizon 5 Deluxe Edition</title>
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

     $query = $db->prepare("SELECT * FROM products WHERE productID = '9'");
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
            <b>Dit is een diverse open wereld.</b><br>
            Verken een wereld van opvallend contrast en schoonheid. Ontdek levende woestijnen, weelderige jungles,
            historische steden, verborgen ruïnes, ongerepte stranden, uitgestrekte canyons en een torenhoge met sneeuw
            bedekte vulkaan.<br><br>
            <b>Dit is een avontuurlijke open wereld.</b><br>
            Dompel jezelf onder in een diepgaande campagne met honderden uitdagingen die je belonen voor het uitvoeren
            van de activiteiten waar je van houdt. Ontmoet nieuwe personages en kies de resultaten van hun Horizon
            Story-missies.<br><br>
            <b>Dit is een zich ontwikkelende open wereld.</b><br>
            Neem het op tegen ontzagwekkende weersomstandigheden zoals torenhoge stofstormen en intense tropische
            stormen terwijl de unieke, dynamische seizoenen van Mexico de wereld elke week veranderen. Blijf terugkomen
            voor nieuwe evenementen, uitdagingen, verzamelobjecten en beloningen, en nieuwe gebieden om te verkennen.
            Geen twee seizoenen zullen ooit hetzelfde zijn.<br><br>
            <b>Dit is een sociale open wereld</b><br>
            Werk samen met andere spelers en betreed de Horizon Arcade voor een voortdurende reeks leuke, over-the-top
            uitdagingen die jou en je vrienden in de actie houden en plezier hebben zonder menu's, laadschermen of
            lobby's. Ontmoet nieuwe vrienden in Horizon Open en Tours en deel je creaties met nieuwe
            community-geschenken. (Op console is Xbox Game Pass Ultimate of Xbox Live Gold vereist, lidmaatschappen
            worden apart verkocht.)<br><br>
            <b>Dit is jouw open wereld</b><br>
            Creëer je eigen uitingen van plezier met de krachtige nieuwe EventLab-gameplaytoolset, inclusief aangepaste
            races, uitdagingen, stunts en geheel nieuwe spelmodi. Personaliseer je auto's op meer manieren dan ooit
            tevoren met nieuwe opties zoals de mogelijkheid om cabriokappen te openen en te sluiten, remklauwen te
            schilderen en meer. Gebruik de nieuwe functie Gift Drops om je eigen creaties met de community te delen.<br><br>
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