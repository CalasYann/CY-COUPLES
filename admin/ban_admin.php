<?php 

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.php?ERROR=admin');
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.php?ERROR=admin');
}

$fichier=fopen("../backend/ban.txt","a");

$verif=fwrite($fichier, $_SESSION["mail"]."\n");
if($verif ==false){
    echo("Problème dans le banissement");
    echo("");
}else{
    header("Location: delete_admin.php");
}

?>