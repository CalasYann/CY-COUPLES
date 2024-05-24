<?php

    session_start();
    $file=file("backend/admin.txt");
    if(isset($file)){
        $c=$file[0];
        $li=explode(':',$c);
        $id=$li[1];

        $c=$file[1];
        $li=explode(':',$c); 
        $pwd=$li[1];
        //echo($id ."\n");
        //echo($_POST["ID"] ."\n");

        //echo($pwd ."\n");
        
        //echo($_POST["PASSWORD"] ."\n");

       
        if(trim($id)==trim($_POST["ID"]) && trim($pwd)==trim($_POST["PASSWORD"])){
            $_SESSION["admin"]="connected";
            $_SESSION["mail"]=1;
            header("Location: hub.php");
        }
        else{
            header("Location: pageacceuil.php");
        }

    }else{
        header("Location: pageacceuil.php");
    }


?>