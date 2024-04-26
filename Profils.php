<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="profils.css">
	<title>Profil</title>
</head>
<body>


<?php
	include ('define.inc.php');
	
	$fichier=file('testprofil.txt');
	$total=count($fichier);
	for($i=0;$i<$total;$i++){
		$c=$fichier[$i];
		$li=explode(':',$c);
		//$test=str_replace("P_","",$li[0]);
		$test=strtolower($li[0]);
		$test=ucfirst($test);
		//echo ($test."<br>");
		switch ($li[0]){
			case P_Nom;
				//$$li[0]=$li[1];
				//break;
			case P_Prenom;
				//$Prenom=$li[1];
				//break;
			case P_Pseudo;
				//$Pseudo=$li[1];
				//break;
			case P_Mail;
				//$Mail=$li[1];
				//break;
			case P_Id;
				//$Id=$li[1];
				//break;
			case P_Password;
				//$Password=$li[1];
				//break;
			case P_Brawler;
				//$Brawler=$li[1];
				//break;
			case P_Mode;
				//$Mode=$li[1];
				//break;
			case P_BrawlName;
				//$BrawlName=$li[1];
				$$test=$li[1];
				break;	
		}
	}
	
?>


<h1> Bienvenue sur votre Porfil </h1>

<h3>Votre Nom :<?php echo $Nom ?> </h3>
<h3>Votre Prenom :<?php echo $Prenom ?> </h3>
<h3>Votre Pseudo :<?php echo $Pseudo ?> </h3>
<h3>Votre BrawlTag :<?php echo $Brawlname ?> </h3>
<h3>Votre Mot de Passe :<?php echo $Password ?> </h3>
<h3>Votre Mail :<?php echo $Mail ?> </h3>
<h3>Votre ID :<?php echo $Id ?> </h3>
<h3>Votre Brawler Pref :<?php echo $Brawler ?> </h3>
<h3>Votre Mode Pref :<?php echo $Mode ?> </h3>

<a href="Modifprofils.php"><button> Modif du profil </button></a>


</body>
</html>
