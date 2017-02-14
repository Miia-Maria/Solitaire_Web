<!--Tekijät: Miia-Maria Mikkola ja Jenni Hautala-->

<!--Settings.php sisältää pelin asetukset.
    Asetukset koostuvat useasta päällekkäisestä div-elementistä.
    Div-muotoinen settings-luokka jakaantuu kolmeen diviin, themeen, 
    difficultyyn ja volumeen. 

    Themen ja difficultyn radiobuttonit on jaettu vielä omiin div-luokkiin, 
    jotta niiden muotoilu voidaan erottaa otsikoista. Myös volumella
    on erikseen div-muotoinen luokka volumeBarille.

    Lopuksi on määritelty vielä alkunäkymään vievä Back-nappula.-->

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        </link>
        <style> .error {color: #FF0000;} </style>
        <meta charset="UTF-8">
        <title>Solitaire</title>
    </head>
    <body>
        <h2>Settings</h2>
        <div class="settings">
            <div class="theme">
                <h4>Theme</h4>
                <div class="themeButtons">
                    <input type="radio" name="theme"
                    <?php if (isset($theme) && $theme=="spring");?>
                    value="spring">Spring

                    <input type="radio" name="theme"
                    <?php if (isset($theme) && $theme=="summer");?>
                    value="summer">Summer

                    <input type="radio" name="theme" CHECKED/>Autumn/Fall
                    <?php if (isset($theme) && $theme=="autumn/fall");?>


                    <input type="radio" name="theme"
                    <?php if (isset($theme) && $theme=="winter");?>
                    value="winter">Winter
                </div>
            </div>
            <div class="difficulty">
                <h4>Difficulty</h4>
                <div class="difficultyButtons">
                    <input type="radio" name="difficulty"
                    <?php if (isset($difficulty) && $difficulty=="noob");?>
                    value="noob">Noob

                    <input type="radio" name="difficulty" CHECKED/>Normal
                    <?php if (isset($difficulty) && $difficulty=="normal");?>

                    <input type="radio" name="difficulty"
                    <?php if (isset($difficulty) && $difficulty=="impossible");?>
                    value="impossible">Impossible                
                </div>
            </div>
            <div class="volume">
                <h4>Volume</h4>
                <div class="volumeBar">
                    <input class="slider" type ="range" min ="0" max="5" step ="1" value ="2"/>
                </div>
            </div>
        </div>
        <form action="ButtonHandler.php" method="get">
            <input type="Submit" Name = "MainScreen" VALUE = "Back" id = "back">
        </form>
    </body>
</html>
