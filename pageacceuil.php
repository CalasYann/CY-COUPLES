<html">
<head>
  <link rel="stylesheet" type="text/css" href="acceuil.css">


</head>
<body>
  <section class="page">
    <nav>
      <div class="onglets">
	<img src="./Brawlstars.png">
      </div>

      <div class="buttons">
        <a href="connection.php"><button class="custom-btn btn-1" href="connection.php">CONNEXION</button></a>

      </div>
    </nav>


    <header>
      <h1>BIENVENUE SUR BRAWL MATE !!</h1>
    </header>
	<?php
		//Affichage du message d'erreur.

		if(isset($_GET["ERROR"])){
			switch($_GET["ERROR"]){
				case "ban":
					echo("<h3>Vous êtes Bannis</h3>");	
				break;
				case "email":
					echo("<h3>Email déjà utilisé</h3>");	
				break;
				case "profil":
					echo("<h3>Echec de la création du compte</h3>");	
				break;
				case "sess":
					echo("<h3>Vous  n'êtes pas connectés</h3>");	
				break;
				case "admin":
					echo("<h3>Vous n'êtes pas un administrateur</h3>");	
				break;
				case "co":
					echo("<h3>Erreur dans le mot de passe ou l'email</h3>");	
				break;
				case "adminerr":
					echo("<h3>Problème interne admin</h3>");	
				break;
			}
		}
	
	?>
</br><hr></br></br>
    
    <!-- Informations -->
<table class="d1">
<tr>
	<th class="e1" width="250">ENTRE TON PERSO ET TON MODE PREFERE !</th>

	<th class="e2" width="250"><img src="https://pngfre.com/wp-content/uploads/red-arrow-47-1024x1024.png" width="170" height="130"/></th>

	<th class="e1" width="250">ENTRE TES CRITERES DE RECHERCHE !</th>

	<th class="e2" width="250"><img src="https://pngfre.com/wp-content/uploads/red-arrow-47-1024x1024.png" width="170" height="130"/></th>

	<th class="e1" width="250">TROUVE TON MATE POUR TAPER TES MEILLEURES GAMES !</th>
</tr>
</table>
</br>
<hr>
</br>
<div class="p2">
<table>
<tr>
	<th><img src="./stardrop rare.png" width="70" height="70"/></th>
	<th></th><th></th><th></th><th></th>
	<th>Utilisateur RARE :</th>
	<th></th><th></th><th></th><th></th>
	
</tr>
</table>
</br>
<div class="c1">Prix : GRATUIT (heureusement c'est rare mdr)</div>
</br>
- Simple utilisateur RARE, tu peux quand même explorer l'univers de BRAWLMATE en parcourant les profils et trouver un super GENTLEMATE pour jouer dans ton mode préféré.
</br> 

</div>
</br>
<hr>
</br>
<div class="p2">
<table>
<tr>
	<th><img src="./stardrop epique.png" width="70" height="70"/></th>
	<th></th><th></th><th></th><th></th>
	<th>Utilisateur EPIQUE :</th>
	<th></th><th></th><th></th><th></th>
</tr>
</table>
</br>
<div class="c1">Prix : 7.99 € (ça commence à être un peu plus interessant)</div>
</br>
- Wow, tu es un utilisateur épique. Tu peux faire des recherches plus avancées et envoyer des messages avec les autres utlisateurs. Trouve vraiment le mate qui te convient selon des critères bien précis que tu pourras sélectionner.


</div>
</br>
<hr>
</br>
<div class="p2">
<table>
<tr>
	<th><img src="./stardrop legendaire.png" width="70" height="70"/></th>
	<th></th><th></th><th></th><th></th>
	<th>Utilisateur LEGENDAIRE :</th>
	<th></th><th></th><th></th><th></th>
</tr>
</table>
</br>
<div class="c1">Condition : Etre en possession du grand seul et unique SPIKE CACA</div>
</br>
- Si tu es légendaire c'est que tu fais partie de l'élite. Détenteur de spike caca, tu seras forcément un des utilisateurs les plus important de notre site.

</div>
</br>
<hr></br></br></br>

<a href="Inscription.php"><button class="custom-btn1 btn-2" href="inscription.php">INSCRIPTION</button></a>

</br></br></br><hr>
</body>
</html>
