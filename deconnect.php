<?php

function deconnect(){
    session_destroy();

    header("Location:pageacceuil.php");

}

session_start();
deconnect();
?>
