<?php
    include_once ("../models/config.php");
    include_once ("../models/modelproduction.php");

    if(!isset($_GET["id"])){
        include_once ("../models/event.php");
        return;
    }
    Supprimer_Producrion($_GET["id"]);
    header('Location: ../Views/connexion_Producteurs.php?id='.$_GET["id"].'');
?>