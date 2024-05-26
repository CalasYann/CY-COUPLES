<?php 
session_start();
require_once('profil_admin.php');
if(isset($_POST['Profil']))
    if($_SESSION["mail"]!=$_POST['Profil']){
        $_SESSION["mail"]=$_POST["Profil"];
    }
affichageProfil_admin(1);


?>