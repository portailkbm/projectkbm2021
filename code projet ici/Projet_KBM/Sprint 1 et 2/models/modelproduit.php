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