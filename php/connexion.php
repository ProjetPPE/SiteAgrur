<?php

	if(isset($_POST['connect'])){
		$user_login = $_POST['user_login'];
		$user_pwd = md5($_POST['user_pwd']); //crypte en md5 le mot de passe entré dans le formulaire
		$sSQL ="SELECT user_Id, user_login, user_pwd, user_admin FROM utilisateur WHERE user_login=?"; //requête de sélection des infos de l'user
		$oRS = mysqli_prepare($bdd,$sSQL);
		if(mysqli_stmt_bind_param($oRS,'s',$user_login)){
			if(mysqli_stmt_execute($oRS)){
				mysqli_stmt_bind_result($oRS,$user_Id_bdd, $user_login_bdd,$user_pwd_bdd,$user_admin_bdd);
					while(mysqli_stmt_fetch($oRS)){
						if($user_pwd == $user_pwd_bdd){ //teste les mots de passe et vérifie s'ils correspondent
							session_start();
							$_SESSION['connect'] = true; //passe le paramètre de connexion à true. et donc permet d'accéder aux fonctionnalités de l'intranet
							$_SESSION['user_id'] = $user_Id_bdd;
							$_SESSION['name'] = $user_login_bdd;
							$_SESSION['admin'] = $user_admin_bdd;
							echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
						}
						else {
							echo "Le mot de passe est incorrect !";
						}
					}
			}
			else {
				echo "erreur exécution";
			}
		}
		else{
			echo "echec paramétrage";
		}
		mysqli_stmt_close($oRS);
		$sSQL = "";
		$oRS = NULL;
	}


?>