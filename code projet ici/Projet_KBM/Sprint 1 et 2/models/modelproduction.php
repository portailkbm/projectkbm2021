<?php
    include_once("Bdd_login.php");
    
    function VisualiserProduction()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM production');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                $product = SelectProducteurid($donnee["idproducteur"]);
                $prod = SelectProduitid($donnee["idproduit"]);
                echo "<tr><td>";
                echo $product;
                echo "</td><td>";
                echo $donnee["idproducteur"];
                echo "</td><td>";
                echo $prod;
                echo "</td><td>";
                echo $donnee["date_debut"];
                echo "</td><td>";
                echo $donnee["date_fin"];
                echo "</td><td>";
                echo $donnee["quantité"];
                echo "</td><td>";
                echo $donnee["unité"];
                echo "</td><td>";
                echo $donnee["cp"];
                echo "</td><td>";
                echo $donnee["prix_unité"];
                echo "</td></tr>";
            }
        }
    }

    function VisualiserProductionProducteur($select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM production WHERE `idproducteur` LIKE "'.$select.'"');
        $requete ->execute();

    
        if ( $requete ->execute())
        {
            //echo $select;
            while($donnee = $requete->fetch())
            {
                //echo $select;
                $prod = SelectProduitid($donnee["idproduit"]);
                echo "<tr><td>";
                echo $donnee["nomprod"];
                echo "</td><td>";
                echo $prod;
                echo "</td><td>";
                echo $donnee["date_debut"];
                echo "</td><td>";
                echo $donnee["date_fin"];
                echo "</td><td>";
                echo $donnee["quantité"];
                echo "</td><td>";
                echo $donnee["unité"];
                echo "</td><td>";
                echo $donnee["cp"];
                echo "</td><td>";
                echo $donnee["prix_unité"];
                echo "</td></tr>";
            }
        }
    }

    function VisualiserProductionSup($select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM production WHERE `idproducteur` LIKE "'.$select.'"');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                $prod = SelectProduitid($donnee["idproduit"]);
                echo "<tr><td><a href='../controlleur/sup_production.php?id=".$donnee["id"]."'>";
                echo $donnee["nomprod"];
                echo "</a></td><td>";
                echo $prod;
                echo "</td><td>";
                echo $donnee["date_debut"];
                echo "</td><td>";
                echo $donnee["date_fin"];
                echo "</td><td><a href='../controlleur/sup_production.php?id=".$donnee["id"]."'>";
                echo $donnee["quantité"];
                echo "</a></td><td>";
                echo $donnee["unité"];
                echo "</td><td>";
                echo $donnee["cp"];
                echo "</td><td>";
                echo $donnee["prix_unité"];
                echo "</td></tr>";
            }
        }
    }

    function Supprimer_Producrion($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE FROM `production` WHERE `id` LIKE "'.$select.'"');
        $requete ->execute(); 
    }

    function SelectProduction($select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM production WHERE `idproducteur` LIKE "'.$select.'"');
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<option value="';
            echo $_SESSION["resultat"]['id'];
            echo '">';
            echo $_SESSION["resultat"]['nomprod'];
            echo '</option>';
        }
    }

    function CreerProduction($nom,$idproducteur,$idex,$idproduit,$date_debut,$date_fin,$quantité,$unité,$cp,$prix_unité)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `production` (`nomprod`,`idproducteur`,`exploitation`,`idproduit`,`date_debut`,`date_fin`,`quantité`,`unité`,`cp`,`prix_unité`) VALUES ('$nom','$idproducteur','$idex','$idproduit','$date_debut','$date_fin','$quantité','$unité','$cp','$prix_unité')");
        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }   
    }

    function ModifierProduction($nom,$idproducteur,$idex,$idproduit,$date_debut,$date_fin,$quantité,$unité,$cp,$prix_unité,$select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("UPDATE `production` SET `nomprod` = '$nom',`exploitation` = '$idex',`idproducteur` ='$idproducteur',`idproduit`='$idproduit',`date_debut`='$date_debut',`date_fin` = '$date_fin',`quantité` ='$quantité',`unité`='$unité',`cp`='$cp',`prix_unité`='$prix_unité' WHERE `id` LIKE '$select'");

        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }   
    }

    function SelectProducteurid($select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("SELECT * FROM producteur WHERE `idprod` LIKE '$select'");
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            return $_SESSION["resultat"]['nomprod'];
        }           
    }

    function SelectProduitid($select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("SELECT * FROM produit WHERE `idproduit` LIKE '$select'");
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {   
            return $_SESSION["resultat"]['nomfranse'];   
        }
    }

    




?>