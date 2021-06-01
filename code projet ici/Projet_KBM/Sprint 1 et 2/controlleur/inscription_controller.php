<?php 
	include("models/account_management.php");
	session_start();

	$mdp=$_POST["mdp"];
	$cmdp=$_POST["Cmdp"];
	$pseudo=$_POST["pseudo"];
    
	if($mdp!=$cmdp){
		$_SESSION['message']="Veiller à ce que le mot de passe et sa confirmation soient identiques";
		include("models/inscription.php");
	}
	else{
		$login="C_".$pseudo;
		$_SESSION['login'] = $login;
		$return = m_inscription_client($_POST["nom"], $_POST["prenom"], $_POST["mdp"], $_POST["mail"], $_POST["telephone"], 1, $login, $_POST["ville"], $_POST["cp"]);
		if ($return == 1){
			header('Location: models/inscription.php');
            exit();
		}else{
			echo "Erreur impossible d'inscrire le client.";
		}
	}
 ?>