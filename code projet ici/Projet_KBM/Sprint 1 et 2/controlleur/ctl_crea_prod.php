<?php 

    if (isset($_POST["exp"])){

        $ns=$_POST["ns"];
        $nl=$_POST["nl"];
        $slt=$_POST["slt"];
        $nf=$_POST["nf"];
        $ex=$_POST["exp"];

        include_once ("../models/modelproduit.php");
        $exp = SelectIdProduit($ex);

        $test = ModifierProduit($ns,$nl,$slt,$nf,$exp);
        if ($test == 1)
        {
            header('Location: ../Views/connexion_client.php');
        }else
        {
            header('Location: ../Views/main.php');
        }
    }
    else
    {
        $ns=$_POST["ns"];
        $nl=$_POST["nl"];
        $slt=$_POST["slt"];
        $nf=$_POST["nf"];

        include_once ("../models/modelproduit.php");
        CreerProduit($ns,$nl,$slt,$nf);
        header('Location: ../Views/connexion_client.php');
    }
?>