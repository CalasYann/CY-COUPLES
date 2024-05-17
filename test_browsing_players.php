<?php

require_once("liste_brawlers.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recherche</title>
        <script src ="test.js">
        </script>
    </head>
    <body>
        <form id="browsing_data" action="test_browse2.php" method="get">
            <input id="mode_field" name="mode" list="mode" placeholder="Mode préféré">
            <datalist id ="mode">
                <option value="bb">Brawlball</option>
				<option value="rz">Razzia</option>
				<option value="sv">Survivant</option>
				<option value="bq">Braquage</option>
				<option value="hj">Hors-Jeu</option>  
            </datalist>

            <input id="brawler_field" list="brawler" name="brawler" placeholder="Brawler">
            <datalist id="brawler">
                <?php
                    display_brawlers();
                ?>
            </datalist>
            <input type="button" value="Rechercher" onclick="sendData()">
        </form>
    </body>
</html>
