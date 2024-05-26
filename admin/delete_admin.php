<?php
session_start();

if (!isset($_SESSION['admin'])) {
     header('Location: ../pageacceuil.php?ERROR=admin');
 }
 elseif ($_SESSION['admin']!='connected'){
     header('Location: ../pageacceuil.php?ERROR=admin');
 }


$file='../backend/'.$_SESSION['mail'].'/private.txt';

if( file_exists ($file)){
     unlink($file);
}


rmdir('../backend/'.$_SESSION['mail']);


$_SESSION["mail"]=1;

header("Location: recherche_admin.php?erreur==0");

?>