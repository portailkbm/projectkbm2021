<?php 
	include("../models/account_management.php");
<<<<<<< HEAD
	session_start();
=======
	//session_start();
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6

	$mdp=$_POST["mdp"];
	$cmdp=$_POST["Cmdp"];
	$pseudo=$_POST["pseudo"];
    
	if($mdp!=$cmdp){
		$_SESSION['message']="Veiller à ce que le mot de passe et sa confirmation soient identiques";
<<<<<<< HEAD
		//include("../Views/inscription.php");
		header('Location: ../Views/inscription.php');
=======
		include("../Views/inscription.php");
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
	}
	else{
		$login="C_".$pseudo;
		$_SESSION['login'] = $login;
		$return = m_inscription_client($_POST["nom"], $_POST["prenom"], $_POST["mdp"], $_POST["mail"], $_POST["telephone"], 1, $login, $_POST["ville"], $_POST["cp"]);
		if ($return == 1){
<<<<<<< HEAD
			header('Location: ../Views/inscription_page2.php');
=======
			header('Location: ../Views/index.php');
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
            exit();
		}else{
			echo "Erreur impossible d'inscrire le client.";
		}
	}
 ?>