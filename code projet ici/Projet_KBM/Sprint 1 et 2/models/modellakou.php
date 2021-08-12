<?php
    include_once("Bdd_login.php");
    include_once("modelevenement.php");
    
    function VisualiserLakou()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM lakou');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                $cp = Code_Postal($donnee["cp"]);
                echo "<tr><td>";
                echo $donnee["nomlak"];
                echo "</td><td><a href='../controlleur/controlleurlakou.php?id=".$donnee["idlak"]."'>";
                echo $donnee["Presentation"];
                echo "</a></td><td>";
                echo $cp;
                echo "</td></tr>";
            }
        }
    }

    function Select_Nom($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `lakou` WHERE `idlak` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["nomlak"].' ';
        } 
    }

    function Select_Presentation($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `lakou` WHERE `idlak` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["Presentation"].' ';
        } 
    }

    function Select_Ville($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `lakou` WHERE `idlak` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        while($_SESSION["resultat"] = $requete->fetch())
        {
            $cp = Code_Postal($_SESSION["resultat"]["cp"]);
            echo  $cp;
        } 
    }

    function Select_Responsable1($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `lakou` WHERE `idlak` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["nom_respon1"].' '.$_SESSION["resultat"]["prenom_respon1"].' '.$_SESSION["resultat"]["mobile_respon1"].' ';
        } 
    }

    function Select_Responsable2($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `lakou` WHERE `idlak` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["nom_respon2"].' '.$_SESSION["resultat"]["prenom_respon2"].' '.$_SESSION["resultat"]["mob_respon2"].' ';
        } 
    }

    
    
     
?>