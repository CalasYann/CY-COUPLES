<?php

require_once("get_user_info.php");

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");

$users = array();
$i = 0;


function browse_players($type, $value){
    $users = array();
    $i = 0;
    global $dir;
    foreach ($dir as $file) {
        echo($dir."\n");
        if ($file->isDir()) {
            echo("  file is Dir\n");
            $user_file = fopen($file."/private.txt","r");
            $buffer_line = fgets($user_file);
            $lines = explode(":", $buffer_line);
            $field = $lines[0];
            $content = $lines[1];
        
            while ($field != $type){
                $buffer_line = fgets($user_file);
                $lines = explode(":", $buffer_line);
                $field = trim($lines[0]);
                $content = trim($lines[1]);
            }
            echo("    -------field :".$field." content : ".$content."\n");

            if ($content == $value){
                echo("test passé\n");
                $temp = count(explode("\\", $file));
                array_push($users, strval(
                    explode("\\", $file)[$temp-1]));
            }
        }
    }
    return $users;
}

$buffer_users = array();
$users_final = array();


foreach($_POST as $key => $value){
    echo("post key : ".$key." post value : ".$value."\n");
}


foreach($_POST as $key => $value){
    if (empty($_POST[$key] == false)){
        echo("$key : $value"."\n");
        $users[$key] = browse_players(trim(strtoupper($key)), trim($value));
        echo("$key\n");
        print_r($users[$key]);
        echo("||||||||||||||||\n");
    }
}


$i = 0;

foreach($users as $key => $value){
    //value is an array of users
    foreach($value as $key2 => $value2){
        //$key2 est un entier, $value2 est un email
        if ( in_array($value2, $buffer_users) == false ){
            echo("\$key2 in \buffer_susers : ".$key2."\n");
            $buffer_users[$i] = $value2;
            $i++;
        }
    }
}
print_r($buffer_users);

$state = 1;

foreach($buffer_users as $key => $value){
    $state = 1;
    foreach($users as $key2 => $value2){
        if (in_array($value, $value2) == false ){
            $state=0;
        }
    }
    if($state == 1){
        array_push($users_final, $value);
    }
}

echo("||||||||||||||||||\n");
print_r($users_final);

$json_typing = json_encode($users_final);

$information_final = array();

foreach($users_final as $key => $value){
    $information_final[$key] = array("nick" => get_player_info($key, "PSEUDO"),
                                     "nick_bs" => get_player_info($key, "BRAWLNAME"),
                                     "id" => get_player_info($key, "ID"),
                                     "brawler" => get_player_info($key, "BRAWLER"),
                                     "MODE" => get_player_info($key, "MODE"));
}

//encoder toutes les informations nécessaires dans le fichier json

$file_json = fopen("json_test.json", "w");
fwrite($file_json,$json_typing);

fclose($file_json);

//echo("hello la team");

// get all users with same mode and/or same favorite and/or
// array $users
// convert $users into json string (json_encode  json_decode)
// echo json

?>
