<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Agrur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=1.0"> <!-- code adaptation smartphone et tablette -->
		
		
			<link rel="stylesheet" type="text/css" href="style.css" />
			<link rel="icon" href="images/noix_ml.ico" /> <!-- pour afficher une icone dans l'onglet -->
        <link rel="stylesheet" href="style.css" /> 
    </head>
	
	
    <body>
	
      <header>
	  
	  <form id="slick-login">
	<label for="Username" class="blanc">Username </label><input class="textLog" type="text" name="Username" class="placeholder" placeholder="adresse@***.com">
	<label for="Password" class="blanc">Password </label><input class="textLog" type="Password" name="Password" class="placeholder" placeholder="password">
		<input type="submit" value="Log In">
			</form>
			<br>
			<br>
			
          <img src="images/logo-noix.jpg"/>
            <nav id="menu">
                <ul>    
                    <li class="icon"><a class="nav" href="index.html">Accueil</a></li> 
                    <li class="icon"><a class="nav" href="consulter.php">Consulter</a></li>
                    <li class="icon"><a class="nav" href="ajouter.html">Ajouter</a></li>
                    <li class="icon"><a class="nav" href="modifier.html">Modifier</a></li>
                    <li class="icon"><a class="nav" href="inscription.html">Inscription</a></li>
					
                </ul>
            </nav>
      </header>
        
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<center>
		<b>Bienvue sur la page de consultation.</b><br/><br/>
		<?php include('connexion.php'); ?>
		</center>
		<br/>
        <p></p>
        
        <footer>Agrur© 2014-2015</footer>
    </body>
</html>