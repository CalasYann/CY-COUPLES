<?php
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
    $file = fopen("./messages/".$filename.".txt","a");
    $date = date("d-m-Y-H-i-s");
    $data = $date.":".$user.":".$target.":".$text."\n";


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
            $data[$i] = array("date" => $buffer_table[0], "user" => $buffer_table[1], "target" => $buffer_table[2]);
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
            if (str_contains($file->getFilename(),$user)) {
                //$data[$i] = $file->getFilename();
                $buffer_name = explode(":", $file->getFilename());
                $f1 = $buffer_name[0];
                $f2 = $buffer_name[1];
                if ($f1 == $user){
                    $target ==  $f2;
                }
                else{
                    $target == $f1;
                }
                $data[$i] = $target;
                $i++;
            }
        }
    return $data;
}

if ( isset($_POST["functionname"])){
    $aResult = array();
    $aResult['result'] = Messages($_POST['arguments'][0], $_POST['arguments'][1]);


    echo($aResult);
}
?>
