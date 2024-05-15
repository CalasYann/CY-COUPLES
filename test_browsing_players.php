<?php

    require_once("browse_players.php");
    require_once("liste_brawlers.php");

    $user_list = browse_players("MODE", "Brawlball");

?>

<!DOCTYPE html>

<html>
    <head>
        <script src="browse_serach.js"></script>
        <title>Recherche de Mates</title>
    </head>
    <body>
        <div>
            <form id="browsing_info">
                <input type="text" id="text-bar" name="text-bar">
                <label for="brawler">Brawler :</label>
                <input list="brawler" name="brawler"/>
                <datalist id="brawler">
                    <?php
                        display_brawlers();
                    ?>
                </datalist>

                <label for="mode">Mode de jeu préféré :</label>
                <input list="mode" name="mode">
                <datalist id="mode">
                    <option value="bb">Brawlball</option>
                    <option value="rz">Razzia</option>
                    <option value="sv">Survivant</option>
                    <option value="bq">Braquage</option>
                    <option value="hj">Hors-Jeu</option>
                </datalist>

                <input type="submit" value="Rechercher"/>

            </form>
        </div>
    </body>
</html>