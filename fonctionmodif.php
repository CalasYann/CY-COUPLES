<?php

require_once ('define.inc.php');
require_once ('list_brawlers.php');
require_once ('list_mode.php');

function affichageProfil($modifs){
    $dos=$_SESSION["mail"];
    $fichier=file('backend/'.$dos.'/private.txt');
    $total=count($fichier);
    for($i=0;$i<$total;$i++){
        $c=$fichier[$i];
        $li=explode(':',$c);
        //$test=str_replace("P_","",$li[0]);
        $test=strtolower($li[0]);
        $test=ucfirst($test);
        //echo ($test."<br>");
        //echo ($li[0]."<br>");
        switch ($li[0]){
            case NOM;
                //$$li[0]=$li[1];
                //break;
            case PRENOM;
                //$Prenom=$li[1];
                //break;
            case PSEUDO;
                //$Pseudo=$li[1];
                //break;
            case MAIL;
                //$Mail=$li[1];
                //break;
            case ID;
                //$Id=$li[1];
                //break;
            case PASSWORD;
                //$Password=$li[1];
                //break;
            case BRAWLER;
                //$Brawler=$li[1];
                //break;
            case MODE;
                //$Mode=$li[1];
                //break;
            case BRAWLNAME;
                //$BrawlName=$li[1];
            case ABONNEMENT;
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
        echo("<a href='Modifprofils.php'><button> Modif du profil </button></a>");
        echo("<a href='hub.php'><button>Acceuil</button></a>");
        echo("<a href='delete.php'><button>supprimer le compte</button></a>");
    }else{
    
        echo ("<h1> Bienvenue sur votre Porfil </h1> <br>");
        echo ("<form action='modif_fichier.php?mail=$Mail' method='post'>");
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
       echo(" <input type='radio' name='abo' value='rare'/>");
	echo('<label for="rare">RARE</label>');
	echo('<input type="radio" name="abo" value="epique"/>');
	echo('<label for="rare">EPIQUE</label>');
	echo('<input type="radio" name="abo" value="légendaire"/>');
	echo('<label for="rare">LEGENDAIRE</label>');
        echo ("<input type='submit' name='Submit' value='Modifier mon Profil'/>");
        echo("</form>");
    } 
}
?>
