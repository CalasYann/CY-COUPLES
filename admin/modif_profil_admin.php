<?php

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.phpphp?ERROR=admin');
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.phpphp?ERROR=admin');
}
require_once('profil_admin.php');

affichageProfil_admin(0);


?>