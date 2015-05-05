<?php
	include_once("fonctions.php");
	$bdd=connecter();
	session_start();
	$login=$_SESSION['login'];
	if(isset($_POST['modiPass'])){
		$sql="SELECT motDePasse FROM producteur WHERE nomRespProd='".$login."'";
		$verifPass=md5($_POST['pwd_oldconnection']);
		$req=mysqli_query($bdd,$sql);
		while($row=mysqli_fetch_array($req)){
			if($verifPass == $row['motDePasse']){
				$leNPass=$_POST['pwd_connection'];
				$leNPass2=$_POST['pwd_repete'];
				if($leNPass==$leNPass2){
					$sqlPass="UPDATE producteur SET motDePasse ='".md5($leNPass)."' WHERE idProducteur ='".recupId()."'";
					$req2=mysqli_query($bdd,$sqlPass);
					echo"<script type='text/javascript'>alert('Mot de passe modifié avec succès'); document.location.replace('../modifierProd.php');</script>";
				}
				else{
				echo"<script type='text/javascript' charset='utf-8'>alert('Les mots de passe ne sont pas identiques'); document.location.replace('../modifierProd.php');</script>";
				}
			}
			else{
				echo"<script type='text/javascript' charset='utf-8'>alert('Le mot de passe n'est pas valide'); document.location.replace('../modifierProd.php');</script>";
			}
		}
	}
	elseif(isset($_POST['modiCoord'])){
		$nomS=$_POST['txt_nomS'];
		$adresseS=$_POST['txt_adresseS'];
		switch($nomS != '' || $adresseS != ''){
			case $nomS != '' :
			$sql="UPDATE producteur SET nomSociete='".$nomS."' WHERE idProducteur ='".recupId()."'";
			$reqSociete=mysqli_query($bdd,$sql);
			echo"<script type='text/javascript'>alert('Informations modifiées avec succès'); document.location.replace('../modifierProd.php');</script>";
			
			case $adresseS != '' :
			$sql="UPDATE producteur SET adresseSociete='".$adresseS."' WHERE idProducteur ='".recupId()."'";
			$reqAdresse=mysqli_query($bdd,$sql);
			echo"<script type='text/javascript'>alert('Informations modifiées avec succès'); document.location.replace('../modifierProd.php');</script>";
		}
	}
	elseif(isset($_POST['modiResp'])){
		$nomR=$_POST['txt_nom_rep'];
		$prenomR=$_POST['txt_prenom_rep'];
		switch($nomR != '' || $prenomR != ''){
			case $nomR != '' :
			$sql="UPDATE producteur SET nomRespProd='".$nomR."' WHERE idProducteur ='".recupId()."'";
			$reqSociete=mysqli_query($bdd,$sql);
			echo"<script type='text/javascript'>alert('Informations modifiées avec succès'); document.location.replace('../modifierProd.php');</script>";
			
			case $prenomR != '' :
			$sql="UPDATE producteur SET prenomRespProd='".$prenomR."' WHERE idProducteur ='".recupId()."'";
			$reqAdresse=mysqli_query($bdd,$sql);
			echo"<script type='text/javascript'>alert('Informations modifiées avec succès'); document.location.replace('../modifierProd.php');</script>";
		}
	}
	

?>