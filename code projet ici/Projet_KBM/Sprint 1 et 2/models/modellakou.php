<?php
    include_once("Bdd_login.php");
    
    function VisualiserLakou()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM lakou');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["nomlak"];
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idlak"]."'>";
                echo $donnee["Presentation"];
                echo "</a></td><td>";
                echo $donnee["cp"];
                echo "</td><td>";
            }
        }
    }
     
?>