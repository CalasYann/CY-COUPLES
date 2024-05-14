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
            $users[i] = $file;
            $i++;
        }
    }
    return $users;
}

?>