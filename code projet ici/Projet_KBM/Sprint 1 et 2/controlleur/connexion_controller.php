<?php 
	$mdpsaisi=$_POST["mdp"];
	$loginsaisi=$_POST["login"];
	include("../models/config.php");
	global $login_client,$mdp_client,$login_admin,$mdp_admin,$login_membre,$mdp_membre,$login_r,$mdp_r,$login_producteur,$mdp_producteur,$login_transporteur,$mdp_transporteur;
	if(($mdp_admin!=$mdpsaisi && $login_admin!=$loginsaisi) || ($mdp_client!=$mdpsaisi && $login_client!=$loginsaisi) || ($mdp_membre!=$mdpsaisi && $login_membre!=$loginsaisi) || ($mdp_r!=$mdpsaisi && $login_r!=$loginsaisi) ||  ($mdp_producteur!=$mdpsaisi && $login_producteur!=$loginsaisi)){
		$_SESSION['message']="Mot de passe ou pseudo incorrect";
		include("../Views/connexion.php");
	}
	elseif($mdp_admin==$mdpsaisi && $login_admin==$loginsaisi){
		include("../Views/connexion_administrateur.html");
	}
	elseif($mdp_membre==$mdpsaisi && $login_membre==$loginsaisi){
		include("../Views/connexion_membre.html");
	}
	elseif($mdp_r==$mdpsaisi && $login_r==$loginsaisi){
		include("../Views/connexion_responsable.html");
	}
	elseif($mdp_producteur==$mdpsaisi && $login_producteur==$loginsaisi){
		include("../Views/connexion_producteur.html");
	}
	else{
		$_SESSION['login']=$_POST["login"];
		//$_SESSION['login']=$_POST["login"];
		include("../Views/connexion_client.php");
	}
 ?>