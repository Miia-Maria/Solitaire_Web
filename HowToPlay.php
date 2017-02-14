<!--Tekijät: Miia-Maria Mikkola ja Jenni Hautala-->

<!--HowToPlay.php sisältää pelin ohjeistuksen.
    Ohjeistus on textArea-nimisessä div-luokassa,
    esimerkkiteksti on totetutettu paragraaffina.

    Lopuksi on määritelty nappulat, jotka vievät
    Start-näkymään ja aloitusnäkymään.-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        </link>
        <style></style>
        <meta charset="UTF-8">
        <title>Solitaire</title>
    </head>
    <body>
        <h2>How to Play?</h2>
        <div class="textArea">
            <p>Moikkelis moimoimoooiasohda
                    dhasouhdasoidhasodhasöhsndlaäskndlasndlaskdna
                    slkdn   n kjlk jlkjkl äkj jäk ljkjl TÄSSÄ ON NYT TÄTÄ 
                    OHJEISTUSTA SITTEN!!!!!!!!!! lisäää tekstiäääää moi moi moi
                    asddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
                    dddasdasdasdsadasdasdasdsa
            </p>       
        </div>
        <div class="howToPlayButtons">
            <form action="ButtonHandler.php" method="get">
                <input type="Submit" Name = "Start" VALUE = "Start Game">
                <input type="Submit" Name = "MainScreen" VALUE = "Back">
            </form>
        </div>
    </body>
</html>

