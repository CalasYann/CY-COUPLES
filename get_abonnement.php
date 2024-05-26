<?php
function abonnement($dos){
    $file=file("backend/".trim($dos)."/private.txt");
    foreach($file as $key){
        $c=explode(":",$key);
        if(trim($c[0])== "ABONNEMENT"){
            return $c[1];
        }
    }
    return false;
}