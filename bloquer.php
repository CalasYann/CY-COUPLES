<?php
function isblock($profil){
    if(file_exists("backend/".$_SESSION["mail"]."/block.txt")){
        $file=file("backend/".$_SESSION["mail"]."/block.txt");
        foreach($file as $key){
            if(trim($key)==trim($profil)){
                return true;
            }
        }
    }
    return false;
}



function block($profil){
    $fichier=fopen("backend/".$_SESSION["mail"]."/block.txt",'a');
    fwrite($fichier,trim($profil));
}

function unblock($profil){ 
    $file=file("backend/".$_SESSION["mail"]."/block.txt");
    $block=array();
    $i=0;
    foreach($file as $key){

        if(trim($key)==trim($profil)){
            
        }else{
            $block[$i]=trim($key);
            $i++;
        }
    }
    $fichier=fopen("backend/".$_SESSION['mail']."/block.txt",'w');
    if(isset($block[0])){
        
        fwrite($fichier,$block[0]);
        fclose($fichier);
        $fichier=fopen('backend/'.$_SESSION['mail'].'/block.txt','a');
        for($i= 1;$i<count($block);$i++){
            fwrite($fichier,$block[$i]);
        }
    }
    fclose($fichier);
}

?>