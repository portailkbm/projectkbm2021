<?php
    include_once ("../models/modelproduction.php");

    if (isset($_POST["exp"])){
        $nom=$_POST["name"];
        $idproducteur=$_GET["id"];
        $idex=$_POST["expt"];
        $idproduit=$_POST["pdr"];
        $quantité=$_POST["qte"];
        $unité=$_POST["unt"];
        $prix_unité=$_POST["prx"];
        $date_debut=$_POST["date_debut"];
        $date_fin=$_POST["date_fin"];
        $select = $_POST["exp"];

        $test = ModifierProduction($nom,$idproducteur,$idex,$idproduit,$date_debut,$date_fin,$quantité,$unité,$cp,$prix_unité,$select);
        if ($test == 1)
        {
            header('Location: ../Views/connexion_Producteurs.php?id='.$_GET["id"].'');
        }else
        {
            header('Location: ../Views/main.php');
        }
    }
    else
    {
        $nom=$_POST["name"];
        $idproducteur=$_GET["id"];
        $idex=$_POST["expt"];
        $idproduit=$_POST["pdr"];
        $quantité=$_POST["qte"];
        $unité=$_POST["unt"];
        $prix_unité=$_POST["prx"];
        $date_debut=$_POST["date_debut"];
        $date_fin=$_POST["date_fin"];

       
        $test = CreerProduction($nom,$idproducteur,$idex,$idproduit,$date_debut,$date_fin,$quantité,$unité,$cp,$prix_unité);
        if ($test == 1)
        {
            header('Location: ../Views/connexion_Producteurs.php?id='.$_GET["id"].'');
        }else
        {
            header('Location: ../Views/main.php');
        }
    }
?>