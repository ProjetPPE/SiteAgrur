<?php

function connecter(){
	/*** Connexion BDD Agrur ***/
	$user="root"; //root si uWamp
	$pwd=""; //root si uWamp
	$host="localhost";
	$dbname="agrur";
	$bdd = mysqli_connect ($host,$user,$pwd,$dbname) or die("Erreur de connexion à la base de données :".mysqli_error($link));
	return $bdd;
}

function quitter($laCo){
	mysqli_close($laCo);
}

function supprimerSession(){
	session_destroy();
}

function recupId(){
	$idProd=$_SESSION['idProd'];
	return $idProd;
}
?>