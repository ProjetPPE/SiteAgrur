<!DOCTYPE html>
<html lang="fr">

	<?php include("php/head.php"); ?>
	
	
	
    <body>
	
	<?php include("php/header.php"); ?>
        
		<center>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<b>Bienvue sur la page d'inscription</b>
			<br/>
			<br/>

		
			<form name="se_connecter" action="connecter.php" method="POST">
				<fieldset><legend>Vos Identifiants</legend>
					<label>Identifiant</label> <input type="text" placeholder="Identifiant" name="txt_identifiant" required/><br/>
					<label>Mot de passe</label> <input type="password" placeholder="mot de passe" name="txt_pswd" required/><br/>
				</fieldset>
				<fieldset><legend>Vos Coordonnées</legend>
					<label>Votre nom</label> <input type="text" placeholder="Nom" name="txt_nom_c" required/><br/>
					<label>Votre prénom</label> <input type="text" placeholder="Prénom" name="txt_prenom_c" required/><br/>
					<label>Nom de l'entreprise</label> <input type="text" placeholder="Nom de l'entrerise" name="txt_nom" required/><br/>
					<label>Adresse de l'entreprise</label> <input type="text" placeholder="Adresse de l'entreprise" name="txt_adresse" required/><br/>
					<label>Code Postal</label> <input type="text" placeholder="01234" name="txt_codePostal" required/><br/>
					<label>Ville</label> <input type="text" placeholder="Ville" name="txt_ville" required/><br/>
				</fieldset>
				<fieldset><legend>Votre représentant</legend>
					<label>Nom</label> <input type="text" placeholder="Nom" name="txt_nom_rep"/><br/>
					<label>Prenom</label> <input type="text" placeholder="Prenom" name ="txt_prenom_rep"/><br/>
				</fieldset>
				<br/><br/>
				<input type="submit" value="Inscription" name="bouton_inscription"/>
			</form>
		</center>

<!-- //fournir, inscire, connecter, modifier, passer une commande, -->
		<br>
        <p></p>
        
        <?php include("php/footer.php"); ?>
    </body>
</html>
