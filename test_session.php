<?php

session_start();

if (isset($_SESSION["Mail"])){
    $state=1;

}else{ 
    $state= 0;
}

?>