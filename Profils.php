<?php
	require_once("test_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Profil</title>
</head>
<body>


<?php
	require_once ('define.inc.php');
	require_once ('fonctionmodif.php');
	

    if($_GET["error"]==1){
    	echo("Modification Impossible\n");
    }

	if($state==1){
    	affichageProfil(1);
	}
	else{
		exit(0);
	}
?>




</body>
</html>
