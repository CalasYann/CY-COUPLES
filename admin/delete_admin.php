<?php
session_start();



$file='../backend/'.$_SESSION['mail'].'/private.txt';

if( file_exists ($file)){
     unlink($file);
}


rmdir('../backend/'.$_SESSION['mail']);


$_SESSION["mail"]=1;

header("Location: recherche_admin.php");

?>