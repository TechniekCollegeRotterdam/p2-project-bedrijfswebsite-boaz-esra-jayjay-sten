<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint</title>


</head>




<body>

    <?php include 'nav.html'?>


    <main class="product-main">
        <form class="searchbar-mobile" method="post" action="searchbar.php">
            <input type="text" placeholder="search..." name="search">
            <button type="submit" value="search">search</button>
        </form>



        <h1 class="titleklacht">File a complaint</h1>


        <form class="klachtform" id="comform" method="post" action="klachtresult.php">

            <section class="names">
                <label name="name">Firstname *</label>
                <input type="text" placeholder="John" required name="fname">

                <label name="name">Lastname *</label>
                <input type="text" placeholder="Doe" required name="lname">
            </section>
            <section class="email">
                <label name="mail">Email *</label>
                <input type="mail" placeholder="Someone@123.com" required name="mail">
            </section>
            <section class="telform">
                <label name="tel">Tel *</label>
                <input type="tel" placeholder="+31 6 123456789" required name="tel">
            </section>

            <p>Write your complaint down below.</p>

            <textarea form="comform" name="comment" placeholder="Explain your complaint here" required rows="4"
                cols="50"></textarea>

            <section class="submit-reset">
                <input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
            </section>







        </form>



    </main>

    <?php include 'footer.html'; ?>


</body>

</html>