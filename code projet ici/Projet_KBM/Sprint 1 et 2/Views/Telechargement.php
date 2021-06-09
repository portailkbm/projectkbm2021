<?php

    include_once ("../models/modelevenement.php");
    $bdd= connection_bdd();
    $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "5"');
    $requete ->execute();
    $_SESSION["resultat"] = $requete ->execute();
  

    while($_SESSION["resultat"] = $requete->fetch())
    {
       
        $test = $_SESSION["resultat"]['flyer'];
        //$test = base64_encode( $_SESSION["resultat"]['flyer'] );

        echo $_SESSION["resultat"]['idevent'];
        $base64 = base64_encode($_SESSION["resultat"]['flyer']);
        //$file = base64_decode($base64);
        $file = base64_decode($_SESSION["resultat"]['flyer']);
        //echo  base64_encode( $_SESSION["resultat"]["flyer"] );

        //echo   $_SESSION["resultat"]["flyer"];
    }

    
    header('Content-Type: application/pdf') ; // A confirmer
    header('Content-Disposition: inline; filename="nom_du_fichier.pdf"') ;
    header('Content-Length: ' . strlen($test)) ;
   

 /* 
    // lecture fonctionnel
    
    // Stocker le nom du fichier dans une variable
    //$file = $test; 
    //$file = "../Ressources/test.pdf";
        
    // Type de contenu dd l'en-tête
    header('Content-type: application/pdf'); 
        
    header('Content-Disposition: inline; filename="' . $file . '"'); 
        
    header('Content-Transfer-Encoding: binary'); 
        
    header('Accept-Ranges: bytes'); 
        
    // Lire le fichier
    @readfile($file);

*/

/*
    // téléchargement fonctionel

    $file = "../Ressources/test.pdf";
    //$file = $test;
    header('Content-Type: application/pdf');

    // Il sera nommé downloaded.pdf
    header('Content-Disposition: attachment; filename="Téléchargement.pdf"');

    // Le source du PDF original.pdf
    //readfile($test);
    readfile($file);
*/
 /*   // Le chemin du fichier (path) 
  $file = "../Ressources/test.pdf"; 
    
  // Type de contenu d'en-tête
  header("Content-type: application/pdf"); 
    
  header("Content-Length: " . filesize($file)); 
    
  // Envoyez le fichier au navigateur.
  readfile($file); */

  /*
    $file = "../Ressources/test.pdf";
    header('Content-Type: application/pdf');
    header('Content-Transfer-Encoding: Binary');
    header('Content-disposition: attachment; filename="' . basename($file) . '"');*/

?>