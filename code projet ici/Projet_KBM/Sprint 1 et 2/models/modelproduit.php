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

    function CreerProducteur($lib,$deb,$fin,$hd,$hf,$cp)
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `producteur` (`libevent`,`debutevent`,`finevent`,`debutevent_hr`,`finevent_hr`,`cp`) VALUES ('$lib','$deb','$fin','$hd','$hf','$cp') ");
        $requete ->execute();

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

     function SupprimerProducteur($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE * FROM `producteur` WHERE `idprod` LIKE "'.$select.'"');
        $requete ->execute(); 
    }