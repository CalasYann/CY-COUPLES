<?php
	require_once("liste_brawlers.php");
?>
<!DOCTYPE html>

<html>
	<head>
		<title>Inscription</title>
	</head>
	<body>
		<form  method="post" action="register.php">
			<input type="text" name="nom" placeholder="Nom"/>
			<input type="text" name="prenom" placeholder="Prenom"/>
			<input type="text" name="pseudo" placeholder="Pseudo sur le site"/>
			<input type="text" name="bs" placeholder="Compte Brawl Stars"/>
			
			<input type="password" name="mdp" placeholder="Mot de Passe"/>
			<input type="email" name="mail" placeholder="Adresse Mail"/>
			<input type="text" name="htag" placeholder="# Brawl Stars"/>
			<input list="perso" name="Perso" placeholder="Ton Perso Préféré"/>
			<datalist id="perso">
				<?php
					display_brawlers();
				?>
			</datalist>
			<input list="mode" name="Mode" placeholder="Ton Mode Préféré"/>
			<datalist id="mode">
				<option value="bb">Brawlball</option>
				<option value="rz">Razzia</option>
				<option value="sv">Survivant</option>
				<option value="bq">Braquage</option>
				<option value="hj">Hors-Jeu</option>
				<!--faire un affichage dynamique de la liste en php-->
			</datalist>
			<input type="reset" />
			<input type="submit" name="Submit" value="S'inscrire"/>
		</form>
	</body>
</html>
