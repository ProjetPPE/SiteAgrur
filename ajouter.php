<?php
	/*** Connexion BDD Agrur ***/
	$user="root";
	$pwd="root";
	$host="localhost";
	$dbname="agrur";
	$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pwd", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$sql="INSERT INTO client VALUES ('',?, 'Chef de guerre', '$lieu', ?)";
	$oRS = mysqli_prepare($bdd,$sql);
	if(mysqli_stmt_bind_param($oRS,'si',$per_Nom,$per_Niveau)){ // s pour les chaînes de caractères / i pour les entiers / d pour les décimaux / b pour les BLOB
		if(mysqli_stmt_execute($oRS)){
			echo "Requête effectué avec succès !";
		}
		else {
			echo "Echec de la requête";
		}
	}
	else {
		echo "Echec paramétrage.";
	}
	mysqli_stmt_close($oRS);
	$sSQL = "";
	$oRS = NULL;
?>