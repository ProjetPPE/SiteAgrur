<?php
	include_once("php/fonctions.php"); //include_once permet d'inclure une seule fois le fichier (évite le fatal error de php5)
	
	if($bd = connecter()){
		$sql="select * from client";
		if($oRS = mysqli_query($bd,$sql)){
			if(mysqli_num_rows($oRS) > 0 ){
				echo "<table id='tableau'><thead><tr><th id='tableau'>Société</th><th id='tableau'>Prénom Du Responsable</th><th id='tableau'>Nom Du Responsable</th><th id='tableau'>Adresse Du Client</th></tr></thead>";
				while ($data = mysqli_fetch_assoc($oRS)){
					echo "<tr ><td id='tableau'>".$data['nomSociete']."</td><td id='tableau'>".$data['prenomRespAchat']."</td><td id='tableau'>".$data['nomRespAchat']."</td><td id='tableau'>".$data['adresse']."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "Il n'y a pas de clients dans la base";
			}
		}
		else {
			echo "echec requete";
		}
	}
	$sSQL = "";
	$oRS = NULL;
	quitter($bd);
?>