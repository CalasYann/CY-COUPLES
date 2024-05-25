
<?php
	require_once("list_brawlers.php");
	require_once("list_mode.php");
	
?>
<!DOCTYPE html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="inscription.css">
		<title>Inscription</title>
	</head>
    <body>
    <table class="d1">
    <tr>
	<th class="e2" width="250"><img src="./Brawlstars.png" /></th>
    </tr>
    </table>
    <p2>
    <form  method="post" action="register.php">
            <h4>INSCRIPTION</h4>
            <hr>
            <div class="div1">
                </br><div>
			        <input type="text" name="nom" placeholder="Nom"/>
			        <input type="text" name="prenom" placeholder="Prenom"/>
			    </div></br><div>
                    <input type="text" name="pseudo" placeholder="Pseudo sur le site"/>
                    <input type="text" name="bs" placeholder="Compte Brawl Stars"/>
			    </div></br><div>
		            <input type="email" name="mail" placeholder="Adresse Mail"/>
                    <input type="password" name="mdp" placeholder="Mot de Passe"/>
                </div></br><div>
			        <input type="text" name="htag" placeholder="# Brawl Stars"/>
                </div></br>
            </div>
            <div>
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
                </div></br><div1>
			        <input type="radio" name="abo" value="rare"/>
			        <label for="rare">RARE</label>
			        <input type="radio" name="abo" value="epique"/>
			        <label for="rare">EPIQUE</label>
			        <input type="radio" name="abo" value="légendaire"/>
			        <label for="rare">LEGENDAIRE</label>
                </div1></br><div3>
			        <input type="reset" />
			        <input type="submit" name="Submit" value="S'inscrire"/>
                </div3></br>
                <p1>Vous avez déjà un compte ? <a class="a1" href="connection.php">Se connecter</a></p1>
            </div>
	</form>
    </p2>    
	</body>
</html>
