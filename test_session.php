<?php

if (isset($_SESSION["mail"])){
    $state=1;

}else{ 
    $state= 0;
    header("Location: pageacceuil.php");
}

?>