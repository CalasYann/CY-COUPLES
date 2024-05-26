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
                    echo('
                    <table class="d1">
                    <tr>
	                <th class="e2" width="250"><img src="./Brawlstars.png" /></th>
                    </tr>
                    </table>
                    <p2>
                    
                    <h4>BIENVENUE !!</h4>
                    <hr>
                    </br>
                    <div class="div1">
                        </br><div class="div4">
                        <a href="test_browsing_players.php"> <button class="b1" id="rechercherMates">Rechercher des Mates</button> </a>
                       
                        <a href="Profils.php?error=0"><button class="b1">Profil</button></a>
                
                        <a href="deconnect.php"><button class="b1">Se Deconnecter</button></a>
                        </div></p2></br></br>');
                        if( is_file("./backend/".$_SESSION['mail']."/bio.txt") == false){
                
                            echo("<p class='p8' id='pr_msg'>"."<a class='a1' href='page.php?id=".$_SESSION['mail']."'>Complétez votre profil</a> </p></br>");
                        }
                           
                    
                }else{
                    echo('<h3>Vous êtes actuellement sur la page admin du site</h3>');
                    echo('<a href="admin/recherche_admin.php?erreur=0"><button class="b1">Rechercher des Profils</button></a>');
                    echo('<a href="../deconnect.php"><button class="b1">Se deconnecter</button></a>');
                }
            ?>
        
            
        </div>
    </body>

</html>
