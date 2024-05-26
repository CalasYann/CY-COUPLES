<?php
require_once('../list_brawlers.php');
require_once('../list_mode.php');
    function affichageProfil_admin($modifs){
        $fichier=file('../backend/'.$_SESSION["mail"].'/private.txt');
        $total=count($fichier);
        for($i=0;$i<$total;$i++){
            $c=$fichier[$i];
            $li=explode(':',$c);
            $test=strtolower($li[0]);
            $test=ucfirst($test);
            switch ($li[0]){
                case "NOM";

                case "PRENOM";

                case "PSEUDO";

                case "MAIL";

                case "ID";

                case "PASSWORD";

                case "BRAWLER";

                case "MODE";

                case "BRAWLNAME";

                case "ABONNEMENT";
                    $$test=$li[1];
                    break;    
            }
        }
        if($modifs==1){
            echo ("<h1> Bienvenue sur votre Porfil </h1> <br>");
    
            echo ("<h3>Votre Nom :$Nom </h3> <br>");
            echo("<h3>Votre Prenom :$Prenom</h3> <br>");
            echo("<h3>Votre Pseudo :$Pseudo</h3> <br>");
            echo("<h3>Votre BrawlTag : $Brawlname</h3> <br>");
            echo("<h3>Votre Mot de Passe :$Password </h3> <br>");
            echo("<h3>Votre Mail :$Mail </h3> <br>");
            echo("<h3>Votre ID :$Id </h3> <br>");
            echo("<h3>Votre Brawler Pref :$Brawler  </h3> <br>");
            echo("<h3>Votre Mode Pref :$Mode  </h3> <br>");
            echo("<h3>Mon Abonnement :$Abonnement  </h3> <br>");
            echo("<a href='modif_profil_admin.php'><button> Modif du profil </button></a>");
            echo("<a href='recherche_admin.php?erreur=1'><button>Barre de Recherche</button></a>");
            echo("<a href='delete_admin.php'><button>supprimer le compte</button></a>");
            echo("<a href='ban_admin.php'><button>bannir le compte</button></a>");
            echo("<a href='messages.php'");
        }else{
        
            echo ("<h1> Bienvenue sur votre Porfil </h1> <br>");
            echo ("<form action='../modif_fichier.php?mail=$Mail' method='post'>");
            echo ("<h3>Votre Nom :<input type='text' value='$Nom' name='Nom'></h3> <br>");
            echo("<h3>Votre Prenom :<input type='text' value='$Prenom' name='Prenom'> </h3> <br>");
            echo("<h3>Votre Pseudo :<input type='text' value='$Pseudo' name='Pseudo'>  </h3> <br>");
            echo("<h3>Votre BrawlTag :<input type='text' value='$Brawlname' name='Bname'>  </h3> <br>");
            echo("<h3>Votre Mot de Passe :<input type='text' value='$Password' name='Mdp'>  </h3> <br>");
            //mettre un champ caché avec l'ancien mot de passe (hidden)
            echo("<h3>Votre Mail :$Mail </h3> <br>");
            echo("<h3>Votre ID :<input type='text' value='$Id' name='Id'></h3> <br>");
            echo("<h3>Votre Brawler Pref :
            
            <input list='perso' name='Perso' value='$Brawler' placeholder='Entre ton Main'/>
                <datalist id='perso'>");
                    display_brawlers();
                echo("</datalist>
            </h3><br>");
            echo("<h3>Votre Mode Pref :
            <input list='mode' name='Mode' value='$Mode' placeholder='Entre ton Mode Préféré'/>
            <datalist id='mode'>");
                display_mode();
            echo("      
            </datalist>
            </h3><br>");
            echo("Changer d'abonnement : (Si vous changer d'abonnement vous risquez d'être facturé");
          
           if(trim($Abonnement)=="rare"){
                echo(" <input type='radio' name='Abonnement' value='rare' checked />");
                echo('<label for="rare">RARE</label>');
                echo('<input type="radio" name="Abonnement" value="épique"/>');
                echo('<label for="rare">EPIQUE</label>');
                echo('<input type="radio" name="Abonnement" value="légendaire"/>');
                echo('<label for="rare">LEGENDAIRE</label>');
           }else if(trim($Abonnement)=='épique'){
                echo(" <input type='radio' name='Abonnement' value='rare'/>");
                echo('<label for="rare">RARE</label>');
                echo('<input type="radio" name="Abonnement" value="épique" checked />');
                echo('<label for="rare">EPIQUE</label>');
                echo('<input type="radio" name="Abonnement" value="légendaire"/>');
                echo('<label for="rare">LEGENDAIRE</label>');
           }
           else if(trim($Abonnement)=='légendaire'){
                echo(" <input type='radio' name='Abonnement' value='rare'/>");
                echo('<label for="rare">RARE</label>');
                echo('<input type="radio" name="Abonnement" value="épique"/>');
                echo('<label for="rare">EPIQUE</label>');
                echo('<input type="radio" name="Abonnement" value="légendaire" checked />');
                echo('<label for="rare">LEGENDAIRE</label>');
           }else{
                echo(" <input type='radio' name='Abonnement' value='rare'/>");
                echo('<label for="rare">RARE</label>');
                echo('<input type="radio" name="Abonnement" value="épique"/>');
                echo('<label for="rare">EPIQUE</label>');
                echo('<input type="radio" name="Abonnement" value="légendaire" />');
                echo('<label for="rare">LEGENDAIRE</label>');
           }
            echo ("<br><input type='submit' name='Submit' value='Modifier mon Profil'/>");
            echo("</form>");
        } 
    }
?>