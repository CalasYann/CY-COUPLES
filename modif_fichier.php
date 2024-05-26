<?php
session_start();
require_once("test_session.php");
//faire des verifs sur la connexion, l'existence de l'email, verif sur l'ancien mot de passe

//recevoir le formulaire, modifier le fichier

//rediriger vers profils+rajouter dans l'url un message d'erreur si besoin

function create_tab(){
	$tab=array(
		"NOM" => $_POST['Nom'],
		"PRENOM" => $_POST['Prenom'],
		"PSEUDO" => $_POST['Pseudo'],
		"BRAWLNAME" => $_POST["Bname"],
		"PASSWORD" => $_POST["Mdp"],
		"MAIL" => $_GET["mail"],
		"ID" => $_POST["Id"],
		"BRAWLER" => $_POST["Perso"],
		"MODE" => $_POST["Mode"],
		"ABONNEMENT" => $_POST["Abonnement"],
	);
	
	foreach($tab as $key => $value){
		//echo("$key : $value"."</br>");
	}
	
	return $tab;
}






function update($tab){
	
	if(verif_form($tab)){
		
		$file =fopen("backend/".$_GET['mail']."/private.txt", "w");
		if($file!==false){
			$hello=1;
			$error=0;
			foreach($tab as $key => $value){
				$hello=fwrite($file, "$key:$value"."\n");
			
			}		
		}
	}	
	else{
		$error=1;
	}
	
	header('Location: Profils.php?error='.$error);
}


$tab=create_tab();

update($tab);











?>
