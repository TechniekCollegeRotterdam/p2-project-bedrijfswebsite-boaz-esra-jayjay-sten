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
<!--PHP INCLUDE zorgt dat onze footer en navbar op elke pagina hetzelfde staat!-->
  <?php include 'nav.html'?>

<!--De searchbar in mobile form-->
  <main class="product-index">
    <form class="searchbar-mobile" method="post" action="searchbar.php">
      <input type="text" placeholder="search..." name="search">
      <button type="submit" value="search">search</button>
    </form>

    <?php

if(isset($_POST["submit"])) {
    echo "Complaint received!";
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

    if(isset($_POST["tel"])) {
        echo "<br>";
        $message = $_POST['tel'];
        echo "phonenumber = " . $message;
    }

    if(isset($_POST["comment"])) {
        echo "<br>";
        $message = $_POST['comment'];
        echo "complaint = " . $message;
    }

   

}


?>

   


    

  </main>

  <?php include 'footer.html'?>


</body>

</html>