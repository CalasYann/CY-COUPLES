<?php
session_start();
$_SESSION["mail"]=$_POST["mail"];
//rendre le code robuste par rapports aux fichiers 

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$logs = fopen("./backend/logs_register.txt", "a");

$email = $_POST["mail"];
//$email = "non@gmail.com";
$status = 0;
foreach($dir as $file ){
    if($file == $email){
        header("Location:https://op.gg/summoners/euw/nate-2709");
        exit(0);
    }
}

$status =  mkdir("./backend/".$_POST["mail"]);
if ($status == false){
    header("Location:https://op.gg/summoners/euw/gerax-euw");
    exit(0);
}
$doubledragon = 1;
$file = fopen("./backend/".$email."/private.txt", "w");
$doubledragon = fwrite($file, "NOM:".$_POST["nom"]."\n");
$doubledragon = fwrite($file, "PRENOM:".$_POST["prenom"]."\n");
$doubledragon = fwrite($file, "PSEUDO:".$_POST["pseudo"]."\n");
$doubledragon = fwrite($file, "BRAWLNAME:".$_POST["bs"]."\n");
$doubledragon = fwrite($file, "PASSWORD:".$_POST["mdp"]."\n");
$doubledragon = fwrite($file, "MAIL:".$_POST["mail"]."\n");
$doubledragon = fwrite($file, "ID:".$_POST["htag"]."\n");
$doubledragon = fwrite($file, "BRAWLER:".$_POST["Perso"]."\n");
$doubledragon = fwrite($file, "MODE:".$_POST["Mode"]."\n");

$success_logs_register = fwrite($logs, date("d-m-Y").":".$email."\n");
fclose($logs);

fclose($file);

if($doubledragon != false){
    header("Location:https://op.gg/summoners/euw/benyrium-eeuuw");  //mettre cette condition à chaque fwrite();
    exit(0);
}
else{
    header("Location:https://youtube.com");
    exit(0);
}
/*$mails = "test2";
mkdir("./backend/".$mails);

$file2 = fopen("./backend/".$mails."/profil.txt", "w");

fclose($file2);*/
?>
