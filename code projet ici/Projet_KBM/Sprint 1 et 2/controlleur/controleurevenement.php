<?php
        //connection à la base de donnée
        try
        {
            $useur = 'root';
            $pass = '';
            include_once("models/Bdd_login.php");
            //$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
            $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
            
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

    //modification des information
    if (isset($_POST['recherche']))
    {
        include_once ("models/modelevenement.php");
        filter($_POST['trier']);
    }
    if (isset($_POST['visualiser']))
    {
        include_once ("models/modelevenement.php");
        visualiser();
    }
?>
            

       
