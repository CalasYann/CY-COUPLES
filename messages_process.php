<?php
session_start();
require_once("test_session.php");

if ( isset($_POST["USER"]) && isset( $_POST["TARGET"])  && isset( $_POST["MSG"] )) {
    $user = $_POST["USER"];
    $target = $_POST["TARGET"];
    $text = json_decode($_POST["MSG"]);
}
function FileName($var1, $var2) {
    $filename = "";
    $i = 0;
    while ($i < min(strlen($var1), strlen($var2)) && $var1[$i] == $var2[$i]) {
        $i++;
    }
    if ($var1[$i] > $var2[$i]){
        $filename = $var2."!".$var1;
    }
    else {
        $filename = $var1."!".$var2;
    }
    return $filename;
}

if ( isset($_POST["USER"]) && isset( $_POST["TARGET"])  && isset( $_POST["MSG"] )) {

$filename = FileName($user, $target);

    if (is_file("./messages/".$filename.".txt")) {
        storeMessageData($user, $target, $text, $filename);
    }
    else{
        $file = fopen("./messages/".$filename.".txt","w");
        fclose($file);
        storeMessageData($user, $target, $text, $filename);
    }
}

function storeMessageData($user, $target, $text, $filename) {
    $id = 0;
    if (is_file("./messages/".$filename.".txt")){
        $file_read_id = fopen("./messages/".$filename.".txt","r");
        for ($i = 0; $i < count(file("./messages/".$filename.".txt")); $i++){
            $id++;
        }
    }                         
    $file = fopen("./messages/".$filename.".txt","a");
    $date = date("d-m-Y-H-i-s");
    $data = $date.":".$user.":".$target.":".$text.":".$id."\n";


    fwrite($file, $data);

    fclose($file);
}


function Messages($user, $target){
    $data= array();
    $filename = FileName($user, $target);
    if (is_file("./messages/".$filename.".txt")) {
        $file = fopen("./messages/".$filename.".txt","r");                         
        $number_lines = count(file($file));
        $data["nbr"] = $number_lines;
        for ($i = 0; $i < $number_lines; $i++){
            $buffer_line = fgets($file);
            $buffer_table = explode(":", $buffer_line);
            $data[$i] = array("date" => $buffer_table[0], "user" => $buffer_table[1], "target" => $buffer_table[2], "msg" => $buffer_table[3], "id" => $buffer_table[4]);
        }
        fclose($file);

        $json_data = json_encode($data);


        return $json_data;
    }
    else {
        return false;
    }
}


function getAllMessageHistory($user){
    $data = array();
    $dir = new FilesystemIterator(dirname(__FILE__)."/messages");
    $i = 0;
    foreach ($dir as $file) {
            if (str_contains( pathinfo($file->getFilename(), PATHINFO_FILENAME),trim($user))) {
                //$data[$i] = $file->getFilename();
                $buffer_name = explode("!", pathinfo($file->getFilename(), PATHINFO_FILENAME));
                $f1 = $buffer_name[0];
                $f2 = $buffer_name[1];
                if ($f1 == $user){
                    $target =  $f2;
                }
                else{
                    $target = $f1;
                }
                $data[$i] = $target;
                $i++;
            }
        }
    return $data;
}

function AdminGetAllMessageHistory($user){
    $data = array();
    $dir = new FilesystemIterator(dirname(__FILE__)."/messages");
    $i = 0;
    foreach ($dir as $file) {
        $buffer_name = explode("!", pathinfo($file->getFilename(), PATHINFO_FILENAME));
        $f1 = $buffer_name[0];
        $f2 = $buffer_name[1];
        if ($f1 == $user){
            $target = $f2;
        }
        else{
            $target = $f1;
        }
        $data[$i] = $target;
        $i++;
    }
    return $data;
}

function deleteMessage($user, $target, $msg_id){
    //$new_file_table = array();
    $file = fopen("./messages/".FileName($user, $target).".txt","r");
    $line_tbd = "";
    $buffer_line = "";
    $id_from_file = "";
    $number_lines = count(file("./messages/".FileName($user, $target).".txt"));
    $i = 0;

    while ($i < $number_lines && $id_from_file != $msg_id){
        $buffer_line = fgets($file);
        $id_from_file = explode(":", $buffer_line)[4];
        $i++;
    }    


    $contents = file_get_contents("./messages/".FileName($user, $target).".txt");
    $contents = str_replace($buffer_line,"", $contents);
    file_put_contents("./messages/".FileName($user, $target).".txt", $contents);

}

if ( isset($_POST["functionname"])){
    $aResult = array();
    $aResult['result'] = Messages($_POST['arguments'][0], $_POST['arguments'][1]);


    echo($aResult);
}
?>
