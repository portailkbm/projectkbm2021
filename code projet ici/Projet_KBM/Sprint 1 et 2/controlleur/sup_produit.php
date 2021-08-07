<?php
    include_once ("../models/config.php");
    include_once ("../models/modelproduit.php");

    if(!isset($_GET["id"])){
        include_once ("../models/event.php");
        return;
    }
    Supprimer_Produit($_GET["id"]);
    header('Location: ../Views/connexion_client.php');
?>