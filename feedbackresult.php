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

    <?php

if(isset($_POST["submit"])) {
  echo "Feedbaack received!";
  echo "<br>";

  if(isset($_POST["fname"])) {
      echo "<br>";
      $message = $_POST['fname'];
      echo "First name = " . $message;
  }

  if(isset($_POST["lname"])) {
      echo "<br>";
      $message = $_POST['lname'];
      echo "Last name = " . $message;
  }

  if(isset($_POST["mail"])) {
      echo "<br>";
      $message = $_POST['mail'];
      echo "E-mail = " . $message;
  }

  if(isset($_POST["feedradio"])) {
      echo "<br>";
      $message = $_POST['feedradio'];
      echo "You chose = " . $message;
  }

 

}

?>

  

  </main>

  <?php include 'footer.html'?>


</body>

</html>