<?php
	/*** Connexion BDD Agrur ***/
	$user="root";
	$pwd="root";
	$host="localhost";
	$dbname="agrur";
	
	if(isset($_POST['bouton_inscription'])){
		$user=$_POST['txt_identifiant'];
		$pswd=md5($_POST['txt_pswd']);
		$nomEntreprise=$_POST('txt_nom');
		$cdp=$_POST('txt_codePostal');
		$ville=$_POST('txt_ville');
		$nomRep=$_POST('txt_nom_rep');
		$prenomRep=$_POST('txt_prenom_rep');
	}
	
	$bdd = mysqli_connect ($host,$user,$pwd,$dbname) or die("Erreur de connexion à la base de données :".mysqli_error($link));
	
	$SQL="INSERT INTO personnages VALUES ()";
	if(mysqli_query($bdd,$SQL)){
		echo "Requête effectué avec succès !";
	}	
	else {
		echo "Echec de la requête";
	}
	$sSQL = "";
	
?>