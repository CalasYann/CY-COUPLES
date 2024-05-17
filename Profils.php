<!DOCTYPE html>
<html>
<head>
	
	<title>Profil</title>
</head>
<body>


<?php
	require_once ('define.inc.php');
	require_once ('fonctionmodif.php');

    if($_Get["error"]==1){
    	echo("Modification Impossible");
    }
    affichageProfil(1);
	
?>




</body>
</html>
