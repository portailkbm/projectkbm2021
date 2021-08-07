<?php

    include("../models/modelevenement.php");
    if (isset($_POST["exp"])){
        Modifier_Evenement($_POST["name"],$_POST["date_debut"],$_POST["date_fin"],$_POST["timedebut"],$_POST["timefin"],$_POST["cp"],$_POST["exp"]);
        header('Location: ../Views/connexion_client.php');
    }
    else
    {
        Cree_Evenement($_POST["name"],$_POST["date_debut"],$_POST["date_fin"],$_POST["timedebut"],$_POST["timefin"],$_POST["cp"]);
        header('Location: ../Views/connexion_client.php');
    }

    
    
?>
