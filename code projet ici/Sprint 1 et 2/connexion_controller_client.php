<?php 
	$mdpsaisi=$_POST["mdp"];
	$loginsaisi=$_POST["login"];
	include("config.php");
	global $login,$mdp;
	if($mdp!=$mdpsaisi && $login!=$loginsaisi){
		$_SESSION['message']="Mot de passe ou pseudo incorrect";
		include("connexion.php");
	}
	else{
		include("connexion_client.html");
	}
 ?>