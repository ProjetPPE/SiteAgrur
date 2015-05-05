<?php
	include_once("php/fonctions.php"); //include_once permet d'inclure une seule fois le fichier (évite le fatal error de php5)
	
	if($bd = connecter()){
		$sql="select producteur.nomSociete as producteur, superficiePlantee, nbArbresHect, libelleVariete, commune.nom as commune
			  from verger, producteur, commune
			  where verger.idProducteur = producteur.idProducteur
			  and verger.idCommune = commune.idCommune";
		
		if($oRS = mysqli_query($bd,$sql)){
			if(mysqli_num_rows($oRS) > 0 ){
				echo "<table id='tableau'><thead><tr><th id='tableau'>Commune</th><th id='tableau'>Producteur</th><th id='tableau'>Variété du verger</th><th id='tableau'>Superficie du Verger</th><th id='tableau'>Nombre d'arbres</th></tr></thead>";
				while ($data = mysqli_fetch_assoc($oRS)){
					echo "<tr ><td id='tableau'>".$data['commune']."</td><td id='tableau'>".$data['producteur']."</td><td id='tableau'>".$data['libelleVariete']."</td><td id='tableau'>".$data['superficiePlantee']."</td><td id='tableau'>".$data['nbArbresHect']."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "Il n'y a pas de vergers dans la base";
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