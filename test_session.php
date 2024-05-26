<?php

if (isset($_SESSION["mail"])){
    $state=1;

}else{ 
    $state= 0;
    header("Location: pageacceuil.php?ERROR=sess");//vous n'êtes pas connecté
}

?>