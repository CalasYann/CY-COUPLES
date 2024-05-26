<?php
require_once("browse_players.php");
require_once("test_session.php");
?>
<!DOCTYPE html>
<html>
    <head>

        <?php
            require_once("list_brawlers.php");
            require_once("list_mode.php");
            require_once("browse_players.php");
            require_once("get_user_info.php");
        ?>
        <title>Recherche</title>
        <script src ="browse_search.js">
        </script>
        <link rel="stylesheet" type="text/css" href="recherche.css">
    </head>
    <body>
        <form id="browsing_data" action="browse_players.php" method="post">
            <input class = "p1" id="mode_field" name="mode" list="mode" placeholder="Mode préféré">
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
            <input class="b1" type="button" value="Rechercher" onclick="sendData()">
            
        </form>


        <div id="users">
            <?php
                $recent_users = get_10_most_recent_users();
                $recent_users_count = count($recent_users);
                $information_recent_users = array();
                foreach($recent_users as $user){
                    $information_recent_users[$user] = array("nick" => get_player_info($user, "PSEUDO"),
                    "nick_bs" => get_player_info($user, "BRAWLNAME"),
                    "id" => get_player_info($user, "ID"),
                    "brawler" => get_player_info($user, "BRAWLER"),
                    "MODE" => get_player_info($user, "MODE"));

                }

                $information_recent_users = array_reverse($information_recent_users);

                foreach($information_recent_users as $user => $value){
                    if ( !in_array(false, $value)){
                    echo("<div class='player'> <a href='page.php?id=$user'>$value[nick] </a> </div>"); //appliquer le style avec un fichier css
                    }
                }
            ?>

            
        </div>
    </body>
</html>
