<?php
session_start();
require_once("test_session.php");
require_once("bloquer.php");

if(isset($_GET["block"])){
    if($_GET["block"] == 0){
        unblock($_GET["TARGET"]);
    }elseif($_GET["block"] == 1){

       block($_GET['TARGET']);
    }
    
    header('Location: page.php?id='.trim($_GET["TARGET"]));
}