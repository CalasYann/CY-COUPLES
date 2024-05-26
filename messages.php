<?php
    require_once("messages_process.php");
    require_once("test_session.php");
    
    require_once("get_user_info.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Messages</title>
        <link rel="stylesheet" href="messages.css">
    </head>
    <body>
        <div>
            <header>salut</header>
        </div>
        <div id="main">
            <div id="navbar">
                <?php

                if ($_SESSION['admin'] != "connected"){
                    $usr = $_SESSION["mail"];
                    $all_conversations = getAllMessageHistory($usr);
                    foreach($all_conversations as $conv){
                        echo("<div><a href='messages.php?TARGET=".$conv."'>".get_player_info($conv, "PSEUDO")."</a></div>");

                    }
                }
                elseif ($_SESSION["admin"] == "connected"){
                    $usr = $_SESSION["mail"];
                    $all_conversations = getAllMessageHistory($usr);
                    foreach($all_conversations as $conv){
                        echo("<div><a href='messages.php?TARGET=".$conv."'>".get_player_info($conv, "PSEUDO")."</a></div>");

                    }
                
                 }

                ?>
                

            </div>
            <div id="chatbox">
                <div id="msg_history">

                </div>
                <div id="end_div">
                    <input type="text" id="textbar">
                    <button id="send">envoyer</button>
                    <button id ="refresh">Rafraîchir</button>
                </div>
            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <script type="text/javascript">
            var user =
            "<?php
                echo($_SESSION["mail"]);
            ?>";
            var target =
            "<?php
                echo($_GET["TARGET"]);
            ?>";

        </script>
        <script src="messages.js"></script>
    </body>
</html>
