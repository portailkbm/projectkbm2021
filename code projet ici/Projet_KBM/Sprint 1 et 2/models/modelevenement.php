<?php
     session_start();
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
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idevent"]."'>";
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
                echo "</td><td><a href='../controlleur/controleurevenement.php?id=".$donnee["idevent"]."'>";
                echo $donnee["libevent"];
                echo "</a></td><td>";
                echo $donnee["cp"];
                echo "</td></tr>";
              /*  echo "<tr><td>";
						echo $donnee["debutevent"];
						echo "</td><td><a href='page-evenement.html'>";
						echo $donnee["libevent"];
						echo "</a></td><td>";
						echo $donnee["cp"];
						echo "</td></tr>";*/
                        
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

        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["libevent"].' ';
        } 
        
    }

    function Select_Debut_evenement($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
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

    function Select_Fin_evenement($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["finevent"].' ';
        }  
    }

    function Select_code_postal($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo ' '.$_SESSION["resultat"]["cp"].' ';
        }  
    }

    function Select_Image($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();

        //Récupérer l'image à partir du base de données
        $res = $db->query('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
    
        if($res->num_rows > 0){
            $img = $res->fetch_assoc();
            
            //Rendre l'image
            header("Content-type: image/jpg"); 
            echo $img['imagevent']; 
        }else{
            echo 'Image non trouvée...';
        }
/*
        while($_SESSION["resultat"] = $requete->fetch())
        {
            //Rendre l'image
           header("Content-type: image/jpg"); 
           /*echo '<img src="'.$_SESSION["resultat"]["imagevent"].'"';
           echo ' alt="" width="600" height="600">'; */
 /*          echo $_SESSION["resultat"]["imagevent"];
        }       */  
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