<?php
// ne pas oublier de changer le host des 2 fonction

    function connection_bdd() {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
           $useur = 'root';
           $pass = '';
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
						echo "</td><td><a href='page-evenement.html'>";
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
						echo "</td><td><a href='page-evenement.html'>";
						echo $donnee["libevent"];
						echo "</a></td><td>";
						echo $donnee["cp"];
						echo "</td></tr>";
                        
            }
        }
    }

    function filter_date_futur()
    {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
           $useur = 'root';
           $pass = '';
           include_once("Bdd_login.php");
           $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $date = date("Y-m-d");

        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` >= "'.$date.'"');
        $requete ->execute();
        //SELECT prenom, nom FROM personnes WHERE date_naissance >= 2016-01-01 AND date_naissance <= 2016-12-31

        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<form  action='page-evenement.php' method='POST'>";
                echo "<tr><td>";
                echo $donnee["debutevent"];
                echo "</td><td><a href='controlleur/controleurevenement.php?id=".$donnee["idevent"]."'>";
               // echo "</td><td><a href='page-evenement.php'>";
                //echo "</td><td>";
                echo $donnee["libevent"];
                echo "</a></td><td>";
                //echo "</td><td>";
                echo $donnee["cp"];
                echo "</td></tr>";
                /*echo "<input  name='recherche'>
		              </form>";*/
            }
        }
    } 
    
    function filter_date_passe()
    {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
           $useur = 'root';
           $pass = '';
           include_once("Bdd_login.php");
           $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $date = date("Y-m-d");

        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` <= "'.$date.'"');
        $requete ->execute();
        //SELECT prenom, nom FROM personnes WHERE date_naissance >= 2016-01-01 AND date_naissance <= 2016-12-31
        //SELECT * FROM `evenement` WHERE `debutevent`>= 2021-05-31  
        if ( $requete ->execute())
        {
            while($donnee = $requete->fetch())
            {
                echo "<tr><td>";
                echo $donnee["debutevent"];
                echo "</td><td><a href='../Views/page-evenement.php'>";
                echo $donnee["libevent"];
                echo "</a></td><td>";
                echo $donnee["cp"];
                echo "</td></tr>";
            }
        }
    } 

    function Select_Flyer($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `libevent` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();
        
    }

    function Select_Image($select){
         try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
           $useur = 'root';
           $pass = '';
           include_once("Bdd_login.php");
           $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `libevent` LIKE "'.$select.'"');
        $requete ->execute();

        while($donnee = $requete->fetch())
            {
                echo ' photo = '.$donnee["photoevent"].'</br>';
            }

        
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