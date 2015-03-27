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
				echo "<table><thead><tr><th>Client</th><th>Nom Responsable Client</th><th>Adresse Client</th></tr></thead><tbody>";
				while ($data = mysqli_fetch_assoc($oRS)){
					echo "<tr><td>".$data['clientId']."</td><td>".$data['clientNom']."</td><td>".$data['clientNomResp']."</td><td>".$data['clientAdresse']."</td></tr>";
				}
				echo "</tbody></table>";
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