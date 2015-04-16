<?php
	/*** Connexion BDD Agrur ***/
	$user="root";
	$pwd="root";
	$host="localhost";
	$dbname="agrur";
	$bdd = mysqli_connect ($host,$user,$pwd,$dbname) or die("Erreur de connexion à la base de données :".mysqli_error($link));
	if($bdd){
		$sql="select * from verger";
		if($oRS = mysqli_query($bdd,$sql)){
			if(mysqli_num_rows($oRS) > 0 ){
				echo "<table id='tableau'><thead><tr><th id='tableau'>Superficie du Verger</th><th id='tableau'>Nombre d'arbres</th><th id='tableau'>Producteur</th><th id='tableau'>Variété du verger</th><th id='tableau'>Commune</th></tr></thead>";
				while ($data = mysqli_fetch_assoc($oRS)){
					echo "<tr ><td id='tableau'>".$data['vergerSuperficie']."</td><td id='tableau'>".$data['vergerNbArbre']."</td><td id='tableau'>".$data['prodID']."</td><td id='tableau'>".$data['varID']."</td><td id='tableau'>".$data['commuID']."</td></tr>";
				}
				echo "</table>";
			}
			else {
				echo "client.";
			}
		}
		else {
			echo "echec requete";
		}
	}
	
	$sSQL = "";
	$oRS = NULL;
	mysqli_close($bdd);
?>