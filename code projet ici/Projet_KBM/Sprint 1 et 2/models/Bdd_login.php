<?php 

// definition des constantes pour la base de donnée Anthony
/*
define("BD_USER", "root");
define("BD_MDP", "root");
define("BD_NAME", "demen");*/

// definition des constantes pour la base de donnée Enrick

define("BD_USER", "root");
define("BD_MDP", "");
define("BD_NAME", "demen1587164");

//connection bdd

function connection_bdd() {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
           $useur = 'root';
           $pass = 'root';
           
           $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , constant("BD_MDP") );
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        return $bdd;
    }

?>