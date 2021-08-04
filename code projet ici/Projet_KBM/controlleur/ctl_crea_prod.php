<?php 
    $ns=$_POST["ns"];
    $nl=$_POST["nl"];
	$slt=$_POST["slt"];
    $nf=$_POST["nf"];

    include_once ("../models/modelproduit.php");
    CreerProduit($ns,$nl,$slt,$nf);
    header('Location: ../Views/connexion_client.php');
?>