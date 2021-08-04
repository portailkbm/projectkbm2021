<?php
    include_once ("../models/config.php");
    include_once ("../models/modelevenement.php");

    if(!isset($_GET["id"])){
        include_once ("../models/event.php");
        return;
    }
    SupprimerProducteur($_GET["id"]);
    header('Location: ../Views/connexion_client.php');
?>