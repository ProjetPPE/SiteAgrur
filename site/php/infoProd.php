<?php
	include_once("fonctions.php");
	$bdd=connecter();
	$sql="SELECT nomSociete, adresseSociete, prenomRespProd, nomRespProd FROM producteur WHERE idProducteur='".recupId()."'";
	
	$requete = mysqli_query($bdd,$sql);
	$row=mysqli_fetch_array($requete);
	
	echo"<p>Voici les informations relatives aux renseignements que vous nous avez founis :</p>";
	echo"<table id='tableau'><thead>";
	echo"<tr><th id='tableauInfo'>Votre Société : </th><th id='tableauInfo'>".$row['nomSociete']."</th></tr>";
	echo"<tr><th id='tableauInfo'>Adresse : </th><th id='tableauInfo'>".$row['adresseSociete']."</th></tr>";
	echo"<tr><th id='tableauInfo'>Nom du responsable : </th><th id='tableauInfo'>".$row['nomRespProd']."</th></tr>";
	echo"<tr><th id='tableauInfo'>Prénom du responsable : </th><th id='tableauInfo'>".$row['prenomRespProd']."</th></tr>";
	echo"</table>";
?>