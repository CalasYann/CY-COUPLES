<?php

$list_mode = array(
	"Razia de Gemme",
	"Heist",
	"Prime",
	"Brawl Ball",
	"Survivant Solo",
	"Survivant Duo",
	"Zone Réservé",
	"Hors Jeu",
	"Duel",
	"Chasse ouverte",
	"Basket",
);



function display_mode(){
    global $list_mode;
    foreach($list_mode as $mode){
        echo("<option value='$mode'>$mode</option>");
    }
}
?>
