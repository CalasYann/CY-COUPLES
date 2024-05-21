<?php

require_once("liste_brawlers.php");
require_once("list_mode.php");
require_once("browse_players.php");
require_once("get_user_info.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recherche</title>
        <script src ="browse_search.js">
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


        <div id="users">
            <?php
                $recent_users = get_10_most_recent_users();
                $recent_users_count = count($recent_users);
                $information_recent_users = array();
                foreach($recent_users as $user){
                    $information_recent_users[$user] = array("nick" => get_player_info($key, "PSEUDO"),
                    "nick_bs" => get_player_info($key, "BRAWLNAME"),
                    "id" => get_player_info($key, "ID"),
                    "brawler" => get_player_info($key, "BRAWLER"),
                    "MODE" => get_player_info($key, "MODE"));
                }
            ?>
            
        </div>
    </body>
</html>
