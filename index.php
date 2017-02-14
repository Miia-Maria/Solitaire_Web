<!--Tekijät: Miia-Maria Mikkola ja Jenni Hautala-->

<!DOCTYPE html>
<!--index.php sisältää päänäkymän ohjelmakoodin.
    <link> yhdistää koodin muotoilutiedostoon
    Näkymässä on napit, jotka vievät ohjelman jokaiseen näkymään
    buttonhandlerin avulla-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        </link>
        <style></style>
        <meta charset="UTF-8">
        <title>Solitaire</title>
    </head>
    <body>
        <h1>Solitaire</h1>
        <div class="mainScreenButtons">
            <form action="ButtonHandler.php" method="get">
                <input type="Submit" Name = "Start" VALUE = "Start" id = "start">
                <input type="Submit" Name = "HowToPlay" VALUE = "How to Play?">
                <input type="Submit" Name = "Settings" VALUE = "Settings">
            </form>
        </div>
    </body>
</html>
