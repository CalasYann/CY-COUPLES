<?php

    function display_profil($use){
        $list_profil=array();
        $file=file("../backend/logs_register.txt");
        $total=count($file);   
        for ($i=0; $i<$total; $i++ ){
            $c=explode(":",$file[$i]);
            if(is_dir("../backend/".trim($c[1]))){
                array_push($list_profil, trim($c[1]));
            }
        }
        
        if($use==1){
            foreach($list_profil as $profil){
                echo("<option value='$profil'>$profil</option>");
            }
        }
        else if($use== 2){
            return $list_profil;
        }

    }

?>