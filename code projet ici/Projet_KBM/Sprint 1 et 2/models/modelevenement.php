<?php
     session_start();
// ne pas oublier de changer le host des 2 fonction

    function connection_bdd() {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
           $useur = 'root';
           $pass = 'root';
           include_once("Bdd_login.php");
           $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
    }
    function visualiser()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM evenement WHERE visevent = 1');
        $requete ->execute();

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
						echo $donnee["debutevent"];
						echo "</td><td><a href='page-evenement.php'>";
						echo $donnee["libevent"];
						echo "</a></td><td>";
						echo $donnee["cp"];
						echo "</td></tr>";  
            }
        }
    }
    
    function filter($trier)
    {
        $bdd= connection_bdd();
        //$requete = $bdd->prepare('SELECT * FROM evenement,lakou  WHERE visevent = 1 ORDER BY `evenement`.`'.$trier.'` ASC' );
        $requete = $bdd->prepare('SELECT * FROM evenement  WHERE visevent = 1 ORDER BY `evenement`.`'.$trier.'` ASC' );
        $requete ->execute();


        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
						echo $donnee["debutevent"];
						echo "</td><td><a href='page-evenement.php'>";
						echo $donnee["libevent"];
						echo "</a></td><td>";
						echo $donnee["cp"];
						echo "</td></tr>";
                        
            }
        }
    }

    function filter_date_futur()
    {
        $bdd= connection_bdd();
        $date = date("Y-m-d");

        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` >= "'.$date.'"');
        $requete ->execute();
        //SELECT prenom, nom FROM personnes WHERE date_naissance >= 2016-01-01 AND date_naissance <= 2016-12-31

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["debutevent"];
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idevent"]."'>";
                echo $donnee["libevent"];
                echo "</a></td><td>";
                echo $donnee["cp"];
                echo "</td></tr>";
            }
        }
    } 
    
    function filter_date_passe()
    {
        $bdd= connection_bdd();
        $date = date("Y-m-d");

        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` <= "'.$date.'"');
        $requete ->execute(); 
        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["debutevent"];
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idevent"]."'>";
                echo $donnee["libevent"];
                echo "</a></td><td>";
                echo $donnee["cp"];
                echo "</td></tr>";
            }
        }
    } 

    function Select_Flyer($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();
        //echo ' test1 '.$_SESSION["resultat"].' ';
        //echo ' test '.$_SESSION["resultat"]["libevent"].' ';

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["libevent"].' ';
        } 
        
        //echo $_SESSION["resultat"];
        //echo $_SESSION["resultat"]["libevent"];
    }

    function Select_Debut_evenement($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `libevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["debutevent"].' ';
        }  
    }

    function Select_date($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();
    }
    /*
                echo ' id = '.$donnee["idevent"].'</br>';
                echo ' type = '.$donnee["typeevent"].'</br>';
                echo ' lib = '.$donnee["libevent"].'</br>';
                echo ' des = '.$donnee["desevent"].'</br>';
                echo ' photo = '.$donnee["photoevent"].'</br>';
                echo ' flyer = '.$donnee["flyer"].'</br>';
                echo ' debut = '.$donnee["debutevent"].'</br>';
                echo ' debut_hr = '.$donnee["debutevent_hr"].'</br>';
                echo ' fin = '.$donnee["finevent"].'</br>';
                echo ' fin_fr = '.$donnee["finevent_hr"].'</br>';
                echo ' cr_event = '.$donnee["cr_event"].'</br>';
                echo ' visevent = '.$donnee["visevent"].'</br>';
                echo ' code postale = '.$donnee["cp"].'</br>';
                echo ' idlak = '.$donnee["idlak"].'</br></br>'; */
?>