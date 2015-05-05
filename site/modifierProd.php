<!DOCTYPE html>
<html lang="fr">

   <?php include("php/head.php"); ?>
	
	
    <body>
	
      <?php include("php/headerProd.php"); ?>
        
		<center>
		<p>Bienvue sur la page de votre profil</p>
		<p>Vous pouvez modifier vos informations si vous le souhaitez :</p>
		<br/>
		<br/>
		
			

		<form name="infoModifier" action="php/modifierInfoProd.php" method="POST">
			<fieldset><legend>Votre Mot De Passe</legend>
			<label>Ancien mot de passe</label> <input type="text" placeholder="••••••" name="pwd_oldconnection"/><br/>
			<label>Nouveau mot de passe</label> <input type="password" placeholder="••••••" name="pwd_connection"/><br/>
			<label>Confirmer mot de passe</label> <input type="password" placeholder="••••••" name="pwd_repete"/><br/>
			</fieldset>
			<input type="submit" value="modifier" name="modiPass"/>
		</form>
		<form name="infoModifier" action="php/modifierInfoProd.php" method="POST">
			<fieldset><legend>Vos Coordonnées</legend>
				<label>Nom de la société</label> <input type="text" placeholder="Nom de l'entrerise" name="txt_nomS"/><br/>
				<label>Adresse de le société</label> <input type="text" placeholder="XX rue nomRue" name="txt_adresseS"/><br/>
			</fieldset>
			<input type="submit" value="modifier" name="modiCoord"/>
		</form>
		<form name="infoModifier" action="php/modifierInfoProd.php" method="POST">
			<fieldset><legend>Le Responsable</legend>
			<label>Nom</label> <input type="text" placeholder="Nom" name="txt_nom_rep"/><br/>
			<label>Prenom</label> <input type="text" placeholder="Prenom" name ="txt_prenom_rep"/><br/>
			</fieldset>
			<input type="submit" value="modifier" name="modiResp"/>
		</form>
		</center>
		<br>
        <p></p>
        
        <?php include("php/footer.php"); ?>
    </body>
</html>