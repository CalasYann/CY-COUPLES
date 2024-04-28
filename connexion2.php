<?php
echo($_POST["password"]."\n");


$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$users = array();
$i = 0;

$email_request = $_POST["email"];
echo"------------------------\n";
echo($email_request);
echo"------------------------\n";

foreach($dir as $file) {
    $users[$i] = $file->getFilename();
    echo"".$file->getFilename()."\n";
    $i++;
}

echo"------------------------\n";

foreach($users as $user) {
    echo"".$user."\n";
}




foreach($users as $user) {
    if($user == $email_request) {
        echo("test1\n");
        $buffer_line = "";
    $file = fopen("./backend/".$email_request."/private.txt", "r");
    echo("test2\n");
    echo($email_request."/private.txt");
    for ($j = 0; $j < 4; $j++) {
        fgets($file);
    }
    $buffer_line = fgets($file);
    echo($buffer_line);
    $buffer_line = trim($buffer_line);
    $buffer_table = explode(":", $buffer_line);

    
    
    if ($buffer_table[0] == "PASSWORD") {
        echo("test3\n");
        $buffer_password = $buffer_table[1];
        echo"------------------------\n";
        echo($buffer_password);
    }


    if ($_POST["password"] == $buffer_password){
    header("Location:https://op.gg/summoners/euw/nate-2709");
    }
    

    }
    else{
        header("Location:https"); //renvoyer vers la page de connexion avec une erreur
    }
}



/*if(in_array($email_request, $users)) {
    $buffer_line = "";
    $file = fopen($email_request."/private.txt", "r");
    
    for ($j = 0; $j < 4; $j++) {
        fgets($file);
    }
    $buffer_line = fgets($file);
    $buffer_line = trim($buffer_line);
    $buffer_line = explode(":", $buffer_line);
    if ($buffer_line [0] == "PASSWORD") {
        $buffer_password = $buffer_line[1];
        echo"------------------------\n";
        echo($buffer_password);
    }


    if ($_POST["password"] == $buffer_password){
    header("Location:https://op.gg/summoners/euw/nate-2709.com");
    }
}*/


?>