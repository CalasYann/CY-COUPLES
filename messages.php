<?php
$user = $_POST["USER"];
$target = $_POST["TARGET"];
$text = json_decode($_POST["MSG"]);

function FileName($var1, $var2) {
    $filename = "";
    $i = 0;
    while ($i < min(strlen($var1), strlen($var2)) && $var1[$i] == $var2[$i]) {
        $i++;
    }
    if ($var1[$i] > $var2[$i]){
        $filename = $var2."_".$var1;
    }
    else {
        $filename = $var1."_".$var2;
    }
    return $filename;
}

$filename = FileName($user, $target);

if (is_file("./messages/.".$filename)) {
    storeMessageData($user, $target, $text, $filename);
}

function storeMessageData($user, $target, $text, $filename) {
    $file = fopen("./messages/".$filename."txt","a");
    $date = date("d-m-Y-H-i-s");
    $data = $date.":".$user.":".$target.":".$text."\n";


    fwrite($file, $data);

    fclose($file);
}

?>