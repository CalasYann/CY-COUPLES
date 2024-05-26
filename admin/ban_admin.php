<?php 
session_start();

$fichier=fopen("../backend/ban.txt","a");

$verif=fwrite($fichier, $_SESSION["mail"]."\n");
if($verif ==false){
    echo("Problème dans le banissement");
    echo("");
}else{
    header("Location: delete_admin.php");
}

?>