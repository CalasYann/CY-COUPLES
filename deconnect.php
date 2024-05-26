<?php

function deconnect(){
    session_destroy();

    header("Location:pageacceuil.php");

}
if(isset($_GET["id"])){
    session_start();
    deconnect();
}else{
    deconnect();
}

?>
