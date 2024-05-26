
<!DOCTYPE html>
<?php
require_once('display_profil.php');
?>
<html>
<head>

</head>
<body>
    <form method="POST" action="profil_admin.php">
     </datalist>
    <input list="profil" name="Profil" placeholder="entrez une adresse mail"/>
    <datalist id="profil"> 
        <?php
            display_profil();
        ?>
    </datalist>
    <input type="submit" name="profil_button" value="consulter le profil"/>
    </form> 
</body>
</html>
