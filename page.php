<?php

    require_once("get_user_info.php");
    session_start();
    require_once("test_session.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="page.css">
        
    </head>
    <body>
        <div id="topbar"><a class="a8" href="hub.php" class="topbar_home"><button class="b1" id="retouracceuil">Retour à l'accueil</button></a></div>
        <section>
            <img id=player_icon src='./penny.png'></br>
            <div id="profile">

                <?php
                    if (isset($_GET["id"])) {
                        $player_nick = get_player_info($_GET["id"], "PSEUDO");
                        $player_bs = get_player_info($_GET["id"], "BRAWLNAME");
                        $player_main = get_player_info($_GET["id"], "BRAWLER");
                        $player_mode = get_player_info($_GET["id"], "MODE");
                    }
                    else{
                        $player_nick = "player nick";
                    }
                    echo ("<div class='d1'>");
                    
                    echo ("<div class='d9'>");
                    echo("<span id='player_nick'>Pseudo : $player_nick</span></br>");
                    echo("<span id='player_bs'>Brawlname : $player_bs</span></br>");
                    echo("<span id='player_main'>Brawler : $player_main</span></br>");
                    echo("<span id='player_mode'>Mode préféré : $player_mode</span></br>");
                    echo("</div>");
                    echo("</div>");
                ?>


                <div id="messagerie_zone">
                    <a  href="messages.php?TARGET=<?php
                       echo(trim($_GET["id"]));
                    ?>">   <button id="mes">messagerie</button></a>
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

            console.log(user);
            console.log(target);
        </script>
<script src="page.js"></script>
    </body>
</html>
