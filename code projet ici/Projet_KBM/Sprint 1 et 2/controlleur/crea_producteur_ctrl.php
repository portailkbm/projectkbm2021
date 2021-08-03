<?php 
    $nom=$_POST["nom"];
    $prcenom=$_POST["prenom"];
	$mob=$_POST["mobile"];
    $fixe=$_POST["fixe"];
    $mail=$_POST["mail"];
    $adresse=$_POST["adresse"];
	$civil=$_POST["civil"];
    $cp=$_POST["cp"];
    

    include_once ("../models/modelproduit.php");
    $test = CreerProducteur($nom,$prcenom,$mob,$fixe,$mail,$adresse,$civil,$cp);
    if ($test == 1)
    {
        header('Location: ../Views/connexion_client.php');
    }else
    {
        header('Location: ../Views/main.php');
    }
    
?>