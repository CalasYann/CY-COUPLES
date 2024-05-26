<?php 
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.php?ERROR=admin');//vous n'etes pas admin
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.php?ERROR=admin');
}



require_once('profil_admin.php');
require_once('display_profil.php');
if(isset($_POST['Profil'])){
    if($_SESSION["mail"]!=$_POST['Profil']){
        $_SESSION["mail"]=$_POST["Profil"];
    }
    $list=array();  
    $list=display_profil(2);
    $verif=0;
    foreach($list as $key){
        if($key==$_POST['Profil']){
            $verif=1;
        }      
    }
}

if($verif== 1){
        affichageProfil_admin(1);
    
}else{
    header('Location: recherche_admin.php?erreur=1');
}

?>