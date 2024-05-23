<?php
    session_start();
   require_once("test_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BrawlMate</title>
    </head>
    <body>
        

        <a href="test_browsing_players.php"> <button id="rechercherMates">Rechercher des Mates</button> </a>
        <a href="connexion.php"> <button id="connecion">Se connecter</button> </a>
        <a href="Inscription.php"><button>S'inscrire</button></a>
        <a href="Profils.php?error=0"><button>Profil</button></a>
        <a href="deconnect.php"><button>Se Deconnecter</button></a>
        <form id="full-info">

        </form>
        
    </body>
</html>