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
            case "NOM";
                //$$li[0]=$li[1];
                //break;
            case "PRENOM";
                //$Prenom=$li[1];
                //break;
            case "PSEUDO";
                //$Pseudo=$li[1];
                //break;
            case "MAIL";
                //$Mail=$li[1];
                //break;
            case "ID";
                //$Id=$li[1];
                //break;
            case "PASSWORD";
                //$Password=$li[1];
                //break;
            case "BRAWLER";
                //$Brawler=$li[1];
                //break;
            case "MODE";
                //$Mode=$li[1];
                //break;
            case "BRAWLNAME";
                //$BrawlName=$li[1];
            case "ABONNEMENT";
                $$test=$li[1];
                break;    
        }
    }
    if($modifs==1){
        
        echo ("<h1> Bienvenue sur votre Profil </h1> <br>");
        echo ("<div class='div3'>");
        echo ("<td><h3>Votre Nom : $Nom </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<td><h3>Votre Prenom : $Prenom</h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre Pseudo : $Pseudo</h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre BrawlTag : $Brawlname</h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre Mail : $Mail </h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre Mot de Passe : $Password </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre ID : $Id </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre Brawler Pref : $Brawler  </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Votre Mode Pref : $Mode  </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo(" <h3>Mon Abonnement : $Abonnement  </h3>");
        echo ("</div></br>");
        echo(" <a href='Modifprofils.php'><button class='b1'> Modifier le profil </button></a></th>");
        echo(" <a href='hub.php'><button class='b1'>Acceuil</button></a></th>");
        echo(" <a href='delete.php'><button class='b1'>Supprimer le compte</button></a></th>");
        
    }else{
    
        echo ("<h1> Bienvenue sur votre Profil </h1> </br>");
        echo ("<form action='modif_fichier.php?mail=$Mail' method='post'>");
        echo ("<div class='div3'>");
        echo ("<h3>Votre Nom :<input type='text' value='$Nom' name='Nom'></h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Prenom :<input type='text' value='$Prenom' name='Prenom'> </h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Pseudo :<input type='text' value='$Pseudo' name='Pseudo'>  </h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre BrawlTag :<input type='text' value='$Brawlname' name='Bname'>  </h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Mot de Passe :<input type='text' value='$Password' name='Mdp'>  </h3> ");
        
        //mettre un champ caché avec l'ancien mot de passe (hidden)
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Mail :$Mail </h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre ID :<input type='text' value='$Id' name='Id'></h3> ");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Brawler Pref :
        
        <input list='perso' name='Perso' value='$Brawler' placeholder='Entre ton Main'/>
            <datalist id='perso'>");
                display_brawlers();
            echo("</datalist>
        </h3>");
        echo ("</div>");echo ("<div class='div3'>");
        echo("<h3>Votre Mode Pref :
        <input list='mode' name='Mode' value='$Mode' placeholder='Entre ton Mode Préféré'/>
        <datalist id='mode'>");
        	display_mode();
        echo("      
        </datalist>
        </h3>");
        echo ("</div>");echo("<div>");
        echo("</br>Changer d'abonnement : (Si vous changer d'abonnement vous risquez d'être facturé)");
        echo("</div>");
      
       if(trim($Abonnement)=="rare"){
            echo(" </br><input type='radio' name='Abonnement' value='rare' checked />");
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
       echo("</br>");
        echo ("</br><input class='b1' type='submit' name='Submit' value='Modifier mon Profil'/>");
        echo("</form>");
    } 
}
?>
