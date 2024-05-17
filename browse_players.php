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


/*foreach($_GET as $key => $value){
    if(isset($_GET[$key])){
        $users[$key] = browse_players($key, $value);
    }
}*/

echo("answer<br>");
foreach($_POST as $key => $value){
    echo("$key : $value <br>");
}

// get all users with same mode and/or same favorite and/or
// array $users
// convert $users into json string (json_encode  json_decode)
// echo json

?>
