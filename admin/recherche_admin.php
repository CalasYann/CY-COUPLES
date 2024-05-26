<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../pageacceuil.php?ERROR=admin');
}
elseif ($_SESSION['admin']!='connected'){
    header('Location: ../pageacceuil.php?ERROR=admin');
}

?>
<!DOCTYPE html>
<?php
require_once('display_profil.php');
?>
<html>
<head>

</head>
<body>

    <?php
    if($_GET["erreur"]==1){
        echo"Profil introuvable";
    }
?>
    <form method="POST" action="affiche_profil_admin.php">
     </datalist>
    <input list="profil" name="Profil" placeholder="entrez une adresse mail"/>
    <datalist id="profil"> 
        <?php
            display_profil(1);
        ?>
    </datalist>
    <input class="b1" type="submit" name="profil_button" value="consulter le profil"/>
    </form> 
    <a href="../hub.php"><button class="b1">Hub</button></a>
</body>
</html>
