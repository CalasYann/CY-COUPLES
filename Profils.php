<?php
	session_start();

	require_once('test_session.php');

	require_once ('define.inc.php');
	require_once ('fonctionmodif.php');
	
	?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="profil.css">
    </head>
    <body>
		<?php
	if($_GET["error"]==1){
    	echo("Modification Impossible\n");
    }

	if($state==1){
    	affichageProfil(1);
	}

	else {
		echo("Petit problème");
	}
?>
    </body>
</html>
