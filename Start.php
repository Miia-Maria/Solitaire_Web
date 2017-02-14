<!--Tekijät: Miia-Maria Mikkola ja Jenni Hautala-->

<!--Start.php sisältää pelinäkymän napit.
    Game-otsikko kuvastaa näkymän tarkoitusta.
    Näkymässä on kaksi nappulaa, jotka toimivat samoin
    kuin aloitusnäkymässä-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        </link>
        <style></style>
        <meta charset="UTF-8">
        <title>Solitaire</title>
    </head>
    <body>
        <h2>Game</h2>
        <div class="buttons">
            <form action="ButtonHandler.php" method="get">
            <input type="Submit" Name = "HowToPlay" VALUE = "How to Play?">
            <input type="Submit" Name = "Settings" VALUE = "Settings">                  
        </div>
    </body>
</html>