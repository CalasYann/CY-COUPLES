<?php

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$users = array();
$i = 0;

/*foreach ($dir as $file) {
    $user_file = fopen($file."/private.txt","r");
    
    while ($field != "MODE"){
        $buffer_line = fgets($user_file);
        $lines = explode(":", $buffer_line);
        $field = $lines[0];
        $content = $lines[1];
    }

    if ($content == "Brawlball"){
        users[i] = $file;
        $i++;
    }

}*/


function browse_players($type, $value){
    global $users;
    $i = 0;
    global $dir;
    foreach ($dir as $file) {
        $user_file = fopen($file."/private.txt","r");
    
        while ($field != $type){
            $buffer_line = fgets($user_file);
            $lines = explode(":", $buffer_line);
            $field = $lines[0];
            $content = $lines[1];
        }

        if ($content == $value){
            $users[$i] = $file;
            $i++;
        }
    }
    return $users;
}

$users = array();
$buffer_users = array();
$users_final = array();


/*foreach($_GET as $key => $value){
    if(isset($_GET[$key])){
        $users[$key] = browse_players($key, $value);
    }
}*/



foreach($_POST as $key => $value){
    echo("$key : $value <br>");
    $users[$key] = browse_players(strtoupper($key), $value);
}


$i = 0;

foreach($users as $key => $value){
    //value is an array of users
    foreach($value as $key2 => $value2){
        //$key2 est un entier, $value2 est un email
        if ( in_array($key2, $buffer_users) == false ){
            $buffer_users[$i] = $key2;
            $i++;
        }
    }
}

$state = 1;

foreach($buffer_users as $key => $value){
    foreach($users as $key2 => $value2){
        if (in_array($value, $value2) == false ){
            $state=0;
        }
    }
}

// get all users with same mode and/or same favorite and/or
// array $users
// convert $users into json string (json_encode  json_decode)
// echo json

?>
