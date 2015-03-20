<?php
	/*** Connexion BDD Agrur ***/
	$user="root";
	$pwd="root";
	$host="localhost";
	$dbname="agrur";
	$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pwd", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	if($bdd){
		$sql="select * from client";
		if($oRS = $bdd->query($sql)){ 
			if (count($oRS->fetchAll()) > 0 ){
				echo "<table><thead><tr><th>Client</th><th>Nom Responsable Client</th><th>Adresse Client</th></tr></thead><tbody>";
				while($data = $oRS ->fetch()){
					echo $data;
					echo "coucou";
					echo "<tr><td>".$data['clientId']."</td><td>".$data['clientNom']."</td><td>".$data['clientNomResp']."</td><td>".$data['clientAdresse']."</td></tr>";	
				}
				echo "</tbody></table>";
			}
			else {
				echo "aucun client";
			}
		}
		else {
			echo "echec requete";
		}
	}
	$sSQL = "";
	$oRS = NULL;
?>