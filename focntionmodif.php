<?php

require_once ('define.inc.php');
    
function affichageProfil($modifs){
    
    $fichier=file('testprofil.txt');
    $total=count($fichier);
    for($i=0;$i<$total;$i++){
        $c=$fichier[$i];
        $li=explode(':',$c);
        //$test=str_replace("P_","",$li[0]);
        $test=strtolower($li[0]);
        $test=ucfirst($test);
        //echo ($test."<br>");
        switch ($li[0]){
            case P_Nom;
                //$$li[0]=$li[1];
                //break;
            case P_Prenom;
                //$Prenom=$li[1];
                //break;
            case P_Pseudo;
                //$Pseudo=$li[1];
                //break;
            case P_Mail;
                //$Mail=$li[1];
                //break;
            case P_Id;
                //$Id=$li[1];
                //break;
            case P_Password;
                //$Password=$li[1];
                //break;
            case P_Brawler;
                //$Brawler=$li[1];
                //break;
            case P_Mode;
                //$Mode=$li[1];
                //break;
            case P_BrawlName;
                //$BrawlName=$li[1];
                $$test=$li[1];
                break;    
        }
    }
    if($modifs==1){
        echo ("<h1> Bienvenue sur votre Porfil </h1> <br>");

        echo ("<h3>Votre Nom :$Nom </h3> <br>");
        echo("<h3>Votre Prenom :$Prenom</h3> <br>");
        echo("<h3>Votre Pseudo :$Pseudo</h3> <br>");
        echo("<h3>Votre BrawlTag :echo $Brawlname</h3> <br>");
        echo("<h3>Votre Mot de Passe :$Password </h3> <br>");
        echo("<h3>Votre Mail :$Mail </h3> <br>");
        echo("<h3>Votre ID :$Id </h3> <br>");
        echo("<h3>Votre Brawler Pref :$Brawler  </h3> <br>");
        echo("<h3>Votre Mode Pref :$Mode  </h3> <br>");
        echo("<a href='Modifprofils.php'><button> Modif du profil </button></a>");
    }else{
    
        echo ("<h1> Bienvenue sur votre Porfil </h1> <br>");
        echo ("<form action='Profils.php'>");
        echo ("<h3>Votre Nom :<input type='text' value='$Nom' name='nom'></h3> <br>");
        echo("<h3>Votre Prenom :<input type='text' value='$Prenom' name='Prenom'> </h3> <br>");
        echo("<h3>Votre Pseudo :<input type='text' value='$Pseudo' name='Pseudo'>  </h3> <br>");
        echo("<h3>Votre BrawlTag :<input type='text' value='$Brawlname' name='Bname'>  </h3> <br>");
        echo("<h3>Votre Mot de Passe :<input type='text' value='$Password' name='mdp'>  </h3> <br>");
        echo("<h3>Votre Mail :$Mail </h3> <br>");
        echo("<h3>Votre ID :'<input type='text' value='$Id' name='nom'></h3> <br>");
        echo("<h3>Votre Brawler Pref :
            <datalist>
                <option value='fang'>Fang</option>
                <option value='bull'>Bull</option>
                <option value='penny'>Penny</option>
                <option value='surge'>Surge</option>
                <option value='edgar'>Edgar</option>
            </datalist>
        </h3>.<br>");
        echo("<h3>Votre Mode Pref :
        <datalist id='mode'>
            <option value='bb'>Brawlball</option>
            <option value='rz'>Razia</option>
            <option value='sv'>Survivant</option>
            <option value='bq'>Braquage</option>
            <option value='hj'>Hors-Jeu</option>
                
        </datalist>
        </h3>.<br>");
        echo ("<input type='submit' name='Submit' value='S inscrire'/>");
        echo("</form>");
    }
        
}

?>



