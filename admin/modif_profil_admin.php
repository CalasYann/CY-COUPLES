<?php

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.php');
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.php');
}
require_once('profil_admin.php');

affichageProfil_admin(0);


?>