<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Connexion admin</title>
</head>
<body>

<table class="d1">
    <tr>
	<th class="e2" width="250"><img src="../Brawlstars.png" /></th>
    </tr>
    </table>
    <p2>
    <form  method="post" action="verif_admin.php">
            <h4>CONNECTION ADMIN</h4>
            <hr>
            <div class="div1">
                </br><div class="div4">
                <label for="id">ID : </label>
                <input type="text" id="id" name="ID"/>
                </div></br><div class="div4">
                <label for="password">Password : </label>
                <input type="password" id="password" name="PASSWORD"/>
			    </div></br><div class="div3">
			        <input type="reset" />
			        <input type="submit" name="Se connecter en tant qu'admin"/>
                </div></br>
                
            </div>
	</form>
    </p2>    


</body>

</html>
