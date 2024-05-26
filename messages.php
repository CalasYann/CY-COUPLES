<?php
    session_start();
    require_once("test_session.php");
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
                

            </div>
            <div id="chatbox">
                <div id="msg_history">

                </div>
                <div id="end_div">
                    <input type="text" id="textbar">
                    <button id="send">envoyer</button>
                    <button id ="refresh">Rafraîchir</buttoni>
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
