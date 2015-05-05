<!DOCTYPE html>
<html lang="fr">

	<?php
		// On prolonge la session
		session_start();
		// On teste si la variable de session existe
		if($_SESSION) 
		{
		  // Si existe, on redirige vers le site
		  echo"<script>document.location.replace('/agrurppe/site/accueilProd.php');</script>";
		 
		}
	?>
	
	<head>
		<title>Agrur</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=1.0"> <!-- code adaptation smartphone et tablette -->
		<link rel="stylesheet" type="text/css" href="site/style.css" />
		<link rel="icon" href="images/noix_ml.ico" /> <!-- pour afficher une icone dans l'onglet --> 
	</head>
	<body>
		<header>
			<!--<form id="slick-login" action="php/connexion.php">
				<label for="Username" class="blanc">Identifiant</label><input class="textLog" type="text" name="Username" class="placeholder" placeholder="adresse@***.com">
				<label for="Password" class="blanc">Mot de passe</label><input class="textLog" type="Password" name="Password" class="placeholder" placeholder="Mot de passe">
				<input type="submit" value="Connexion">
			</form>-->
		<br/>
		<br/>
		<img src="site/images/logo-noix.jpg"/>
			<!--<nav id="menu">
				<ul>    
					<li class="icon"><a class="nav" href="site/accueil.php">Accueil</a></li> 
					<li class="icon"><a class="nav" href="site/consulter.php">Consulter</a></li>
					<li class="icon"><a class="nav" href="site/ajouterHTML.php">Ajouter</a></li>
					<li class="icon"><a class="nav" href="site/modifier.php">Modifier</a></li>
					<li id ="menuDeroulant" class="icon"><a class="nav" href="site/inscription.php">Inscription</a></li>
				</ul>
			</nav>-->
		</header>
        
		
		<br/>
		<center>
		<p><h2>Bienvue sur le site de la coopérative d'Agrur.</h2></p>
		<p>Pour accéder aux fonctionnalités liés à votre compte, veuillez entrer l'identifiant et le mot de passe qui vous ont été attribués.</p>
		<p>Si vous n'êtes pas inscrit, veuillez contacter Agrur afin d'obtenir les détails concernant une nouvelle adhésion</p><br/>
		
		<form method="POST" action="site/php/connexion.php">
			<label>Identifiant :</label>	<input type="text" name="identifiant" placeholder="Identifiant"  required><br/><br/>
			<label>Mot de passe : </label>	<input type="password" name="mdp" placeholder="●●●●●●"  required><br/><br/>
			<input type="submit" name="connect" value="CONNEXION">
		</form>
		
		</center>
		<br/>
        <p></p>
        
        <footer>Agrur© 2014-2015</footer>
    </body>
</html>
