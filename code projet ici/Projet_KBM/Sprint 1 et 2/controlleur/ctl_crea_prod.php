<?php 
    $ns=$_POST["ns"];
    $nul=$_POST["nl"];
	$slt=$_POST["slt"];

    include_once ("../models/modelproduit.php");
    CreerProduit($ns,$nl,$slt);
    header('Location: ../Views/connexion_client.php');



?>