<?php
session_start();

//rendre le code robuste par rapports aux fichiers 

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$logs = fopen("./backend/logs_register.txt", "a");

$email = $_POST["mail"];
//$email = "non@gmail.com";

$ban_list = fopen("./backend/ban.txt","r");
$ban_count = count(file("./backend/ban.txt"));
for ($i = 0; $i < $ban_count; $i++){
    $ban_line = fgets($ban_list);
    $ban_line = trim($ban_line);
    if ($email == $ban_line){
        header("Location:pageacceuil.php?ERROR=ban");
    }
}

$status = 0;
foreach($dir as $file ){
    if($file->getFilename() == $email){
        header("Location:pageacceuil.php?ERROR=email");//email déjà utilisé pour un compte.
        exit(0);
    }
}

$status =  mkdir("./backend/".$_POST["mail"]);
if ($status == false){
    header("Location:pageacceuil.php?ERROR=profil");//erreur dans la création du dossier.
    exit(0);
}
$doubledragon = 1;
$file = fopen("./backend/".$email."/private.txt", "w");
$doubledragon = fwrite($file, "NOM:".$_POST["nom"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
}
$doubledragon = fwrite($file, "PRENOM:".$_POST["prenom"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
}
$doubledragon = fwrite($file, "PSEUDO:".$_POST["pseudo"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");
    exit(0);
}
$doubledragon = fwrite($file, "BRAWLNAME:".$_POST["bs"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "PASSWORD:".$_POST["mdp"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "MAIL:".$_POST["mail"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "ID:".$_POST["htag"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "BRAWLER:".$_POST["Perso"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "MODE:".$_POST["Mode"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}
$doubledragon = fwrite($file, "ABONNEMENT:".$_POST["abo"]."\n");
if($doubledragon == false){
    header("Location:pageacceuil.php?ERROR=profil");  
    exit(0);
}

$success_logs_register = fwrite($logs, date("d-m-Y").":".$email."\n");
fclose($logs);

fclose($file);
$_SESSION["mail"]=$_POST["mail"];
$_SESSION["admin"]=0;
header("Location:hub.php");//erreur dans la création du profil.
/*$mails = "test2";
mkdir("./backend/".$mails);

$file2 = fopen("./backend/".$mails."/profil.txt", "w");

fclose($file2);*/
?>
