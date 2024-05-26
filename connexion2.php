<?php

session_start();

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$users = array();
$i = 0;

$email_request = $_POST["email"];
$email_request = trim($_POST["email"]);


foreach($dir as $file) {
    $users[$i] = $file->getFilename();
    
    $i++;
}



foreach($users as $user) {
    if($user == $email_request) {
        
        $buffer_line = "";
        $file = fopen("./backend/".$email_request."/private.txt", "r");
        for ($j = 0; $j < 4; $j++) {
            fgets($file);
        }
        $buffer_line = fgets($file);
        
        $buffer_line = trim($buffer_line);
        $buffer_table = explode(":", $buffer_line);

    
    
        if ($buffer_table[0] == "PASSWORD") {
            $buffer_password = $buffer_table[1];
        }

        if ($_POST["password"] == $buffer_password){
            $i="pip";
            $_SESSION["mail"]=$_POST["email"];
            $_SESSION["admin"]=0;
            header("Location:hub.php");
            die;
        }
        else{
            header("Location:pageacceuil.php?ERROR=co"); //renvoyer vers la page de connexion avec une erreur
            die;
        }
    }
}

header("Location:pageacceuil.php?ERROR=co"); //renvoyer vers la page de connexion avec une erreur

?>