<?php
	// On prolonge la session
	session_start();
	// On teste si la variable de session existe et contient une valeur
	if(empty($_SESSION['login'])) 
	{
	  // Si inexistante ou nulle, on redirige vers le formulaire de login
	  echo"<script>document.location.replace('http://localhost/agrurppe/index.php');</script>";
	  exit();
	}
	else{
		$nom = $_SESSION['login'];
	}
?>
<head>
	<title>Agrur</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=1.0"> <!-- code adaptation smartphone et tablette -->
		
		
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" href="images/noix_ml.ico" /> <!-- pour afficher une icone dans l'onglet -->
</head>