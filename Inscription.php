<?php
	require_once("list_brawlers.php");
	require_once("list_mode.php");
	
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
				<?php
					display_mode();
				?>
			</datalist>
			<input type="radio" name="abo" value="rare"/>
			<label for="rare">RARE</label>
			<input type="radio" name="abo" value="épique"/>
			<label for="rare">EPIQUE</label>
			<input type="radio" name="abo" value="légendaire"/>
			<label for="rare">LEGENDAIRE</label>
			<input type="reset" />
			<input type="submit" name="Submit" value="S'inscrire"/>
		</form>
	</body>
</html>
