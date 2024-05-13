<?php

$email = $_POST["email"];

$dir = new FilesystemIterator(dirname(__FILE__)."/backend");


foreach($dir as $file) {

    if($file == $email) {
        header("Location:op.gg/summoners/euw/benyrium-eeuuw");
    } else {
        header("Location:op.gg/summoners/euw/nate-2709");
    }

}
?>