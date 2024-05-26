<?php

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.phpphp?ERROR=admin');
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.phpphp?ERROR=admin');
}
require_once('profil_admin.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="profil_admin.css">
    </head>
    <body>
<?php
affichageProfil_admin(0);


?>

    </body>
</html>