<?php
	include_once("fonctions.php");
	$bdd=connecter();
	
	$login=$_POST['identifiant'];
	$mdp=md5($_POST['mdp']);
	$prodSQL="SELECT idProducteur, utilisateur, motDePasse FROM producteur";
	$adminSQL="SELECT idAdmin, utilisateur, motDePasse FROM administrateur";
	$resProd=mysqli_query($bdd,$prodSQL);
	$resAdmin=mysqli_query($bdd,$adminSQL);
	$acces=false;
	while($acces != true){
		if($login != '' && $mdp != ''){
			while($row=mysqli_fetch_array($resProd)){
				if($login == $row['utilisateur'] && $mdp == $row['motDePasse']){
					$acces=true;
					session_start();
					$_SESSION['idProd']=$row['idProducteur'];
					$_SESSION['login']=$login;
					$_SESSION['mdp']=$mdp;
					echo"<script type='text/javascript'>document.location.replace('../accueilProd.php');</script>";
				}
				else{
					echo"<script type='text/javascript'>document.location.replace('../../index.php');</script>";
				}
			}
		}
		elseif($login != '' && $mdp != ''){
			while($row=mysqli_fetch_array($resAdmin)){
				if($login == $row['utilisateur'] && $mdp == $row['motDePasse']){
					$acces=true;
					session_start();
					$_SESSION['idAdmin']=$row['idAdmin'];
					$_SESSION['login']=$login;
					$_SESSION['mdp']=$mdp;
					echo"<script type='text/javascript'>document.location.replace('../accueilAdmin.php');</script>";
				}
				echo"<script type='text/javascript'>document.location.replace('../../index.php');</script>";
			}
		}
		else{
			echo"<script type='text/javascript'>alert('Le mot de passe ou le nom d'utilisateur n'est pas valide');</script>";
		}
	}
	quitter($bdd);
?>