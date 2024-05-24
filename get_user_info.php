<?php


function get_player_info($player_email, $field_name) {
    if(is_dir("./backend/".trim($player_email)) == false) {
       return false;
    }
    if (is_file("./backend/".trim($player_email)."/private.txt") == false){
        return false;
    }
    $file = fopen("./backend/".trim($player_email)."/private.txt","r");
    $buffer_line = fgets($file);
    $line = explode(":", $buffer_line);
    $field = $line[0];
    $value = $line[1];
    while($field != $field_name) {
        $buffer_line = fgets($file);
        $line = explode(":", $buffer_line);
        $field = $line[0];
        $value = $line[1];
    }

    return trim($value);
}


?>
