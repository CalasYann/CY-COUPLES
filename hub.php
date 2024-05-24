<?php
    session_start();
   require_once("test_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BrawlMate</title>
        <link rel="stylesheet" href="hub.css">
    </head>
    <body>
        <div id="main">
        
            <?php 
                if ($_SESSION["admin"] !="connected"){
                    echo "<div id='test'>";
                    echo('<a href="test_browsing_players.php"> <button id="rechercherMates">Rechercher des Mates</button> </a>
                    <a href="connexion.php"> <button id="connecion">Se connecter</button> </a>
                    <a href="Inscription.php"><button>S inscrire</button></a>
                    <a href="Profils.php?error=0"><button>Profil</button></a>
                    <a href="deconnect.php"><button>Se Deconnecter</button></a>
                    <form id="full-info">
                    </form>');
                    echo('</div>');
                }else{
                    echo('<h3>Vous êtes actuellement sur la page admin du site</h3>');
                }
            ?>
        
            <?php
            if( is_file("./backend/".$_SESSION['mail']."/bio.txt") == false){
                echo("<div id='update_profile'>");
                echo("<p id='pr_msg'>"."<a href='page.php?id=".$_SESSION['mail']."'>Complétez votre profil</a> </p>");
                echo("</div>");
            }
                

            ?>
            
        </div>
    </body>

</html>