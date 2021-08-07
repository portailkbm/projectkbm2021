<?php
    include_once("Bdd_login.php");
    
    function VisualiserProduit()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM produit');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomsavan"];
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idproduit"]."'>";
                echo $donnee["nomkreyol"];
                echo "</a></td><td>";
                echo $donnee["descproduit"];
                echo "</td><td>";
                echo $donnee["stock"];
                echo "</td></tr>";
            }
        }
    }

    function VisualiserProduitSup()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM produit');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomsavan"];
                echo "</td><td><a href='../controlleur/sup_produit.php?id=".$donnee["idproduit"]."'>";
                echo $donnee["nomkreyol"];
                echo "</a></td><td>";
                echo $donnee["descproduit"];
                echo "</td><td>";
                echo $donnee["stock"];
                echo "</td></tr>";
            }
        }
    }

    function Supprimer_Produit($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE FROM `produit` WHERE `idproduit` LIKE "'.$select.'"');
        $requete ->execute(); 
    }

    function SelectProduit()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM produit');
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<option valeur="';
            echo $_SESSION["resultat"]['nomfranse'];
            echo '">';
            echo $_SESSION["resultat"]['nomfranse'];
            echo '</option>';
        }
    }

    function CreerProduit($ns,$nl,$slt,$nf)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `produit` (`nomkreyol`,`nomfranse`,`nomsavan`,`descproduit`) VALUES ('$nl','$nf','$ns','$slt')");
        $requete ->execute();   
    }

    function AddProduitToExploitation($prd,$qte)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `exploitation` (`libevent`,`debutevent`) VALUES ('$prd','$qte')");
        $requete ->execute();   
    }



    function VisualiserProducteur()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM producteur');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomprod"];
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idprod"]."'>";
                echo $donnee["telprod"];
                echo "</a></td><td>";
                echo $donnee["mailprod"];
                echo "</td></tr>";
            }
        }
    }

    function CreerProducteur($nom,$prcenom,$mob,$fixe,$mail,$adresse,$civil,$cp)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `producteur` (`nomprod`,`telprod`,`mailprod`,`cp`,`prenomprod`,`adresse`) VALUES ('$nom','$mob','$mail','$cp','$prcenom','$adresse') ");
       // $requete ->execute();

        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }
    }

    function ModifierProducteur($lib,$deb,$fin,$hd,$hf,$cp,$select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('UPDATE `producteur` SET libevent = `$lib`,debutevent=`$deb`,finevent=`$fin`,debutevent_hr=`$hd`,finevent_hr=`$hf`,cp=`$cp` WHERE `idprod` LIKE "'.$select.'"');
        $requete ->execute();
    }

    function VisualiserProducteurSup()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM producteur');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomprod"];
                echo "</td><td><a href='../controlleur/sup_producteur.php?id=".$donnee["idprod"]."'>";
                echo $donnee["telprod"];
                echo "</a></td><td>";
                echo $donnee["mailprod"];
                echo "</td></tr>";
            }
        }
    }
    
     function SupprimerProducteur($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE FROM `producteur` WHERE `idprod` LIKE "'.$select.'"');
        $requete ->execute(); 
    }

    function SelectProducteur()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM producteur');
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<option valeur="';
            echo $_SESSION["resultat"]['nomprod'];
            echo '">';
            echo $_SESSION["resultat"]['nomprod'];
            echo '</option>';
        }
    }


    function CreerExploitation($nom,$cp,$type,$surface,$prod)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `exploitation` (`nomex`,`ville`,`type`,`surface`,`nomproducteur`) VALUES ('$nom','$cp','$type','$surface','$prod') ");
        //$requete ->execute();

        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }
    }

    function SelectExploitation()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM exploitation');
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<option valeur="';
            echo $_SESSION["resultat"]['nomex'];
            echo '">';
            echo $_SESSION["resultat"]['nomex'];
            echo '</option>';
        }
    }

    function ModifierExploitation($nom,$cp,$type,$surface,$prod,$exp)
    {
        $bdd= connection_bdd();
       // $requete = $bdd->prepare("INSERT INTO `exploitation` (`nomex`,`ville`,`type`,`surface`,`nomproducteur`) VALUES ('$nom','$cp','$type','$surface','$prod') ");
        $requete = $bdd->prepare("UPDATE `exploitation` SET `nomex`=[value-1],`ville`=[value-2],`type`=[value-3],`surface`=[value-4],`nomproducteur`=[value-5],`id`=[value-6] WHERE `id` LIKE '1'  ");
        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }
    }