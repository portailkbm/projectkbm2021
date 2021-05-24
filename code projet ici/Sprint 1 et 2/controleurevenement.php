<?php
        //connection à la base de donnée
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }

    //modification des information
    if (isset($_POST['recherche']))
    {
        include_once ("modelevenement.php");
        filter($_POST['trier']);
    }
    if (isset($_POST['visualiser']))
    {
        include_once ("modelevenement.php");
        visualiser();
    }
?>
            

       
