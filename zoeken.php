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

  <h1>Search criteria Boaz, Esra, Jayjay.</h1>
    <section class="zoekfuncties">
    <main id="zoekfuncties">
    <form class="searchbar2" method="post" action="searchboaz.php">
      <input type="text" placeholder="Boaz Voornaam" name="search2">
      <button type="submit" value="search2">search</button>
    </form>

    <form class="searchbar2" method="post" action="searchesra.php">
      <input type="text" placeholder="Esra genre" name="search3">
      <button type="submit" value="search3">search</button>
    </form>

    <form class="searchbar2" method="post" action="searchjayjay.php">
      <input type="text" placeholder="Jayjay email" name="search4">
      <button type="submit" value="search4">search</button>
    </form>
    </main>
    </section>
    



  

  <?php include 'footer.html'?>


</body>

</html>