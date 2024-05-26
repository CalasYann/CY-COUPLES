<!DOCTYPE html>
<head>
        <link rel="stylesheet" type="text/css" href="connection.css">
		<title>Connection</title>
	</head>
    <body>
    <table class="d1">
    <tr>
	<th class="e2" width="250"><img src="./Brawlstars.png" /></th>
    </tr>
    </table>
    <p2>
    <form  method="post" action="connexion2.php">
            <h4>CONNEXION</h4>
            <hr>
            <div class="div1">
                </br><div class="div4">
                <label for="email">E-mail : </label>
                <input name="email" id="email" type="text" size="10"/>
                </div></br><div class="div4">
                <label for="password">Password : </label>
                <input name="password" id="password" type="password" size="10"/>
			    </div></br><div class="div3">
			        <input type="reset" />
			        <input type="submit" name="submit" href="hub.php" value="Se Connecter"/>
                </div></br>
                <p1>Vous n'avez pas encore de compte ? <a class="a1" href="inscription.php">S'inscrire</a></p1><br>
                <p1>Vous êtes admin ? <a class="a1" href="admin/connect_admin.php">Se connecter en tant qu'admin</a></p1>
            </div>
	</form>
    </p2>    
	</body>
