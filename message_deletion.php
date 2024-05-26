<?php

require_once("messages_process.php");

if(isset($_POST["USER"]) && isset( $_POST["TARGET"]) && isset($_POST["ID"])){
    deleteMessage($_POST["USER"], $_POST["TARGET"], $_POST["ID"]);
    echo("success");
}


?>