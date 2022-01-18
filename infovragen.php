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

        <article class="infovragenflex">
            <p>


                <b>Sten</b><br>
                1. Toon lijst van alle producten..<br>
                2. Toon lijst producten met type phone.<br>
                3. toon lijst van alle producten met type laptops.<br>
                4. toon lijst met alle producten met type games.<br>
                5. Toon aantal producten in totaal met COUNT.<br>
                6. Toon alle producten waar de naam begint met letter.<br>
                7. Toon lijst met producten op alfabetische volgorde.<br>

            </p>

            <p>


                <b>Esra</b><br>

                1. toon lijst met geboortedatums vanaf 2000..<br>
                2. toon lijst met telefoonnummers die eindigen met 4..<br>
                3. toon lijst met waar de woonplaats spijkenisse is.<br>
                4. toon lijst met namen die beginnen met de letter p.<br>
                5. toon lijst met informatie over mensen die gender m zijn. (man)<br>
                6. toon lijst met client id onder de getal 10.<br>
                7. toon lijst met straatnaam die begint met m.<br>
                <br>

            </P>

            <p>
                - minimaal één overzicht met gegevens uit één tabel (zonder selectie)<br>

                - minimaal één overzicht met gegevens uit één tabel (met selectie)<br>

                - minimaal één overzicht met gegevens uit meerdere tabellen (zonder selectie)<br>

                - minimaal één overzicht met gegevens uit meerdere tabellen (met selectie op gegevens van minimaal één<br>
                tabel)

                - minimaal één overzicht dat gebruikt maakt van COUNT of SUM of AVG<br>

                - minimaal één zoekfunctie voor één tabel<br>

            </p>












        </article>




        </section>


    </main>

    <?php include 'footer.html'?>


</body>

</html>