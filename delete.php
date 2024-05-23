<?php
session_start();
require_once("test_session.php");
require_once("deconnect.php");

$file='backend/'.$_SESSION['mail'].'/private.txt';

if( file_exists ($file)){
     unlink($file);
}


rmdir('backend/'.$_SESSION['mail']);


deconnect();

?>