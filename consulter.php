<!DOCTYPE html>
<html lang="fr">

   <?php include("php/head.php"); ?>
	
	
    <body>
	
      <?php include("php/header.php"); ?>
	  
		<br/>
		<center>
		<h2>Bienvue sur la page de consultation</h2>
		<h3>Nos Clients</h3>
			<?php include('php/afficherClients.php'); ?>
		<h3>Nos Vergers</h3>
			<?php include('php/afficherVergers.php'); ?>
		</center>
		<br/>
        <p></p>
         <?php include("php/footer.php"); ?>
    </body>
</html>
