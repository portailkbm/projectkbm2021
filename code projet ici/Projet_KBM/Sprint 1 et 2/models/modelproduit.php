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

    function ModifierProduit($ns,$nl,$slt,$nf,$select)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("UPDATE `produit` SET `nomkreyol` = '$nl',`nomfranse` ='$nf',`nomsavan`='$ns',`descproduit`='$slt' WHERE `idprod` LIKE '$select'");
        $requete ->execute();   
    }

    function SelectIdProduit($ex)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("SELECT * FROM produit WHERE `nomfranse` LIKE '$ex'");
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
        return $_SESSION["resultat"]['idproduit'];  
        }  
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

    function ModifierProducteur($nom,$prcenom,$mob,$fixe,$mail,$adresse,$civil,$cp,$select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare("UPDATE `producteur` SET `nomprod` = '$nom',`telprod` ='$mob',`mailprod`='$mail',`cp`='$cp',`prenomprod`='$prcenom'`,`adresse`='$adresse' WHERE `idprod` LIKE '$select'");
        $requete ->execute();

        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }
    }

    function SelectIdProducteur($ex)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("SELECT * FROM producteur WHERE `nomprod` LIKE '$ex'");
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
        return $_SESSION["resultat"]['idprod'];  
        }  
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
            echo $_SESSION["resultat"]['id'];
            echo '">';
            echo $_SESSION["resultat"]['nomex'];
            echo '</option>';
        }
    }

    function SelectId($ex)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("SELECT * FROM exploitation WHERE `nomex` LIKE '$ex'");
        $requete ->execute();   
    
        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
        return $_SESSION["resultat"]['id'];  
        }  
    }

    function ModifierExploitation($nom,$cp,$type,$surface,$prod,$exp)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("UPDATE `exploitation` SET `nomex`='$nom',`ville`='$cp',`type`='$type',`surface`='$surface',`nomproducteur`='$prod' WHERE `id` LIKE '$exp'  ");
        if ( $requete ->execute())
        {
            return 1;
        }else
        {
            return 0;
        }
    }

    function VisualiserExploitationSup()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM exploitation');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomex"];
                echo "</td><td><a href='../controlleur/sup_exploitation.php?id=".$donnee["id"]."'>";
                echo $donnee["ville"];
                echo "</a></td><td>";
                echo $donnee["surface"];
                echo "</td></tr>";
            }
        }
    }

    function Supprimer_Exploitation($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE FROM `exploitation` WHERE `id` LIKE "'.$select.'"');
        $requete ->execute(); 
    }
