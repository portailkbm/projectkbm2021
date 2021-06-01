<?php 
	$mdpsaisi=$_POST["mdp"];
	$loginsaisi=$_POST["login"];
	include("models/config.php");
	global $login,$mdp;
	if($mdp!=$mdpsaisi && $login!=$loginsaisi){
		$_SESSION['message']="Mot de passe ou pseudo incorrect";
		include("models/connexion.php");
	}
	else{
		include("Views/connexion_client.html");
	}
 ?>