<?php 
	include("models/config.php");
	include("models/connexion.php");
	global $login,$mdp;
	if (!isset($_POST["mdp"])||!isset($_POST["login"])){
		include("models/connexion.php");
		return;
	}

	$mdpsaisi=$_POST["mdp"];
	$loginsaisi=$_POST["login"];

	if($mdp!=$mdpsaisi && $login!=$loginsaisi){
		$_SESSION['message']="Mot de passe ou pseudo incorrect";
		include("models/connexion.php");
	}
	else{
		include("Views/connexion_client.html");
	}
 ?>