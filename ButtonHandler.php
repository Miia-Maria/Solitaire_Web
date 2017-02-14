<!--Tekijät: Miia-Maria Mikkola ja Jenni Hautala-->

<!-- ButtonHandler.php takaa kaikkien nappien toiminnallisuuden
     Napit on toteutettu ehdoilla, mikäli mitäkin nappia painetaan,
     header vie käyttäjän oikeeaan näkymään-->

<?php
    if (isset($_GET["Start"])) {
        header("Location:Start.php");
    }
    else if (isset($_GET["HowToPlay"])) {
        header("Location:HowToPlay.php");
    }
    else if (isset($_GET["Settings"])) {
        header("Location:Settings.php");
    }
    else if (isset($_GET["MainScreen"])) {
        header("Location:index.php");
    }
