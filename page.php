<?php

    require_once("get_user_info.php");
    session_start();
    require_once("test_session.php");
    require_once("bloquer.php");


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
                    echo ("<div class='d1'>");
                    echo("<img id=player_icon src='./penny.png'>");
                    
                    echo("<span id='player_nick'>Pseudo : $player_nick</span></br>");
                    echo("<span id='player_bs'>Brawlname : $player_bs</span></br>");
                    echo("<span id='player_main'>Brawler : $player_main</span></br>");
                    echo("</div>");
                ?>


                <div id="messagerie_zone">
                    
                    <?php 
                     if(isblock($_GET["id"])){
                        echo('<a  href="blocked.php?TARGET='.trim($_GET['id']).'&block=0" >');  
                        echo('<button id="block">Débloquer</button></a>');
                    }else{
                        echo('<a  href="messages.php?TARGET='.trim($_GET['id']).'" >'); 
                        echo('<button id="mes">messagerie</button></a>');

                        echo('<a  href="blocked.php?TARGET='.trim($_GET["id"]).'&block=1" >');   
                        echo('<button id="block">Bloquer</button></a>');
                    }
                    
                    ?>
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
