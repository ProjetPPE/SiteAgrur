<?php
	/*** Connexion BDD Agrur ***/
	$user="root";
	$pwd="root";
	$host="localhost";
	$dbname="agrur";
	$bdd = mysqli_connect ($host,$user,$pwd,$dbname) or die("Erreur de connexion à la base de données :".mysqli_error($link));
	if($bdd){
		$sql="select * from client";
		if($oRS = mysqli_query($bdd,$sql)){
			if(mysqli_num_rows($oRS) > 0 ){
				echo "<table id='tableau'><thead><tr><th id='tableau'>Client</th><th id='tableau'>Nom Responsable Client</th><th id='tableau'>Adresse Client</th></tr></thead>";
				while ($data = mysqli_fetch_assoc($oRS)){
					echo "<tr ><td id='tableau'>".$data['clientNom']."</td><td id='tableau'>".$data['clientNomResp']."</td><td id='tableau'>".$data['clientAdresse']."</td></tr>";
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