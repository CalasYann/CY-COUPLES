<?php

    require_once("get_user_info.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="page.css">
        
    </head>
    <body>
        <div id="topbar"><a href="hub.php" class="topbar_home">Accueil</a></div>
        <section>
            <div id="profile">

                <?php
                    if (isset($_GET["id"])) {
                        $player_nick = get_player_info($_GET["id"], "PSEUDO");
                        $player_bs = get_player_info($_GET["id"], "BRAWLNAME");
                        $player_main = get_player_info($_GET["id"], "BRAWLER");
                    }
                    else{
                        $player_nick = "player nick";
                    }
                    echo "<div>\n";
                    echo("<img id=player_icon src='https://preview.redd.it/show-penny-some-love-v0-j9w5ibmxunjc1.jpeg?auto=webp&s=694a604721725b039a43ccb69f04630155e7b848'>");
                    echo("</div>");
                    echo("<span id='player_nick'>$player_nick</span>");
                ?>


                <div id="messagerie_zone">
                    <button id="mes">messagerie</button>
                </div>
            </div>

            
        </section>

        <script type="text/javascript">
            var user =
            "<?php
                echo($_SESSION["mail"]);
            ?>";

            var target =
                    "<?php 
                        echo($_GET["id"]);
                    ?>";
        </script>

        <script src="page.js"></script>
    </body>
</html>
