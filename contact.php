<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>


</head>




<body>

    <?php include 'nav.html'?>


    <main class="product-main">
        <form class="searchbar-mobile" method="post" action="searchbar.php">
            <input type="text" placeholder="search..." name="search">
            <button type="submit" value="search">search</button>
        </form>



        <section class="con-con">
            <section class="contact-items">
                <h1>Contact us!</h1>
                <P>Phone: +31 88 123 567 875</P>
                <p>Email: Saturnus@helpdesk.com</p>
                <p>Fax: 457-878-9056</p>
                <a class="con-mailto" href="mailto:saturnus@helpdesk.com">Saturnus@helpdesk.com</a>
                <a class="con-tel" href="tel:+31-88-123-567-875">+31 88 123 567 875</a>

                <p class="loc">Get to know our location!</p>
                <section class="conimg">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7376.158606462548!2d4.487792757144728!3d51.90663841316018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5cd3e9b4611e3%3A0xbe1d04c121cc611c!2sMedia%20Markt%20-%20Saturn%20Holding%20Netherlands!5e0!3m2!1sen!2snl!4v1638792683256!5m2!1sen!2snl"
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </section>
                <section class="klacht">
                    <h2>Complaints?</h2>

                    <P>Don't worry! You can send a complaint here!</P>
                    <a href="klacht.php">File a complaint</a>
                </section>


            </section>



        </section>











    </main>

    <?php include 'footer.html'; ?>


</body>

</html>