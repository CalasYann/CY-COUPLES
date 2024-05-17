<?php

require_once("liste_brawlers.php");
require_once("list_mode.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recherche</title>
        <script src ="test.js">
        </script>
    </head>
    <body>
        <form id="browsing_data" action="browse_players.php" method="get">
            <input id="mode_field" name="mode" list="mode" placeholder="Mode préféré">
            <datalist id ="mode">
                <?php
                    display_mode();
                ?>
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
