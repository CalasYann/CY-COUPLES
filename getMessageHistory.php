<?php

require_once("messages_process.php");

function Messages2($user, $target){
    $data= array();
    $filename = FileName($user, $target);
    if (is_file("./messages/".$filename.".txt")) {
        $file = fopen("./messages/".$filename.".txt","r");
        $number_lines = count(file("./messages/".$filename.".txt"));
        $data["nbr"] = $number_lines;
        for ($i = 0; $i < $number_lines; $i++){
            $buffer_line = fgets($file);
            $buffer_table = explode(":", $buffer_line);
            $data[$i] = array("date" => $buffer_table[0], "user" => $buffer_table[1], "target" => $buffer_table[2], "msg" => $buffer_table[3]);
        }
        fclose($file);

        $json_data = json_encode($data);

        $test_file = fopen("./messages_test.json", "w");
        fwrite($test_file, $json_data);
        fclose($test_file);

        return $json_data;
    }
    else {
        return false;
    }
}


if(isset($_POST["USER"]) && isset($_POST["TARGET"])){
    echo (Messages2($_POST["USER"], $_POST["TARGET"]));
}

?>