<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search results</title>
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php include 'nav.html'?>

    <main class="result-page">
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

        <section class="resultaten-php">
    
        <?php
     // leg verbinding met database
     require_once("dbconnsaturnus.php");
    // Deze Searchbar query is alleen voor de voornaam van mensen
     $query = $db->prepare("SELECT * FROM client WHERE name LIKE '".$_POST['search2']."%' ");
     $query->execute();
     $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

     foreach ($resultq as $data) {
         echo "<br>";
         echo "name: " . $data["name"];
         echo "<br>";
     }


    ?>

        </section>

    </main>

    <?php include 'footer.html'?>


</body>

</html>



































