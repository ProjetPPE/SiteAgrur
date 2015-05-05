<!DOCTYPE html>
<html lang="fr">

	<?php include("php/head.php"); ?>
	
    <body>
	
     <?php include("php/header.php"); ?>
		
		<br/>
		<br/>
		<p id="formatageTitre">Ajouter une variété</p>
		<form id="centrerForm" name="ajoutNoix" method="POST" action="ajouter.php">
			<label>Nom</label> : <input type="text" name="nomNoix" placeholder="Nom de la noix"><br/><br/>
			<label>Estampillé AOC ?<label> : <input type="radio" name="choix" value="1">Oui <input type="radio" name="choix" value="0">Non<br/><br/>
			<input type="submit" value="Envoyer">
		</form>
		<br/>
		<br/>
		<br/>
        <p></p>
        
        <?php include("php/footer.php"); ?>
    </body>
</html>
