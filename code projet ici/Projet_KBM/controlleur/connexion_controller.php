<?php 
	$mdpsaisi=$_POST["mdp"];
	$loginsaisi=$_POST["login"];
	//include("../models/config.php");
	//global $login_client,$mdp_client,$login_admin,$mdp_admin,$login_membre,$mdp_membre,$login_r,$mdp_r,$login_producteur,$mdp_producteur,$login_transporteur,$mdp_transporteur;

	include ('../models/account_management.php');
    $return = m_connexion_client($_POST["login"], $_POST["mdp"]);
	if ($return != 1){
		session_start();
		$_SESSION['message']= "mdp incorect";
		header('Location: ../Views/connexion.php');
	}else{		
		setcookie('pseudo', $_POST['login'], time() + 365*24*3600, null, null, false, true);
		if (isset($_COOKIE['pseudo']))
		{
			session_start();
			$_SESSION['pseudo'] = $_COOKIE['pseudo'];
			$_SESSION['login'] = $_POST["login"];
			include("../Views/connexion_client.php");
			//header('Location: ../Views/connexion_client.php');
		}
    }


/*

	if(($mdp_admin!=$mdpsaisi && $login_admin!=$loginsaisi) || ($mdp_client!=$mdpsaisi && $login_client!=$loginsaisi) || ($mdp_membre!=$mdpsaisi && $login_membre!=$loginsaisi) || ($mdp_r!=$mdpsaisi && $login_r!=$loginsaisi) ||  ($mdp_producteur!=$mdpsaisi && $login_producteur!=$loginsaisi)){
		$_SESSION['message']="Mot de passe ou pseudo incorrect";
		include("../Views/connexion.php");
	}
	elseif($mdp_admin==$mdpsaisi && $login_admin==$loginsaisi){
		include("View/connexion_administrateur.html");
	}
	elseif($mdp_membre==$mdpsaisi && $login_membre==$loginsaisi){
		include("View/connexion_membre.html");
	}
	elseif($mdp_r==$mdpsaisi && $login_r==$loginsaisi){
		include("View/connexion_responsable.html");
	}
	elseif($mdp_producteur==$mdpsaisi && $login_producteur==$loginsaisi){
		include("View/connexion_producteur.html");
	}
	else{
		$_SESSION['login'] = $_POST["login"];
		include("../Views/connexion_client.php");
	}*/
 ?>