<!DOCTYPE html>
<html lang="fr">

   <?php include("php/head.php"); ?>
	
	
    <body>
	
      <?php include("php/header.php"); ?>
        
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<center>
		<p>Bienvue sur la page de votre profil</p>
		<p>Vous pouvez modifier vos informations si vous le souhaitez :</p>
		<br>
		<br>
		
			

		<form name="se_connecter" action="connecter.php" method="POST">
			<fieldset><legend>Votre Mot De Passe</legend>
			<label>Ancien mot de passe</label> <input type="text" placeholder="••••••" name="pwd_oldconnection"/><br/>
			<label>Nouveau mot de passe</label> <input type="password" placeholder="••••••" name="pwd_connection"/><br/>
			<label>Confirmer mot de passe</label> <input type="password" placeholder="••••••" name="pwd_connection"/><br/>
			</fieldset>
			<fieldset><legend>Vos Coordonnées</legend>
				<label>Nom de l'entreprise</label> <input type="text" placeholder="Nom de l'entrerise" name="txt_nom"/><br/>
				<label>Adresse de l'entreprise</label> <input type="text" placeholder="Adresse de l'entreprise" name="txt_adresse"/><br/>
				<label>Code Postal</label> <input type="text" placeholder="01234" name="txt_codePostal"/><br/>
				<label>Ville</label> <input type="text" placeholder="Ville" name="txt_ville"/><br/>
			</fieldset>
			<fieldset><legend>Votre représentant</legend>
			<label>Nom</label> <input type="text" placeholder="Nom" name="txt_nom_rep"/><br/>
			<label>Prenom</label> <input type="text" placeholder="Prenom" name ="txt_prenom_rep"/><br/>
			</fieldset>
			<br/><br/>
			<input type="submit" value="Inscription" name="inscrit"/>
		</form>


<!-- //fournir, inscire, connecter, modifier, passer une commande, -->
		</center>
		<br>
        <p></p>
        
        <?php include("php/footer.php"); ?>
    </body>
</html>