<?php
    include_once ("../models/config.php");
    include_once ("../models/modelevenement.php");

    if(!isset($_GET["id"])){
        include_once ("../models/event.php");
        return;
    }

    /* 
    Select_Flyer($_GET["id"]); 
    */
    include_once ("../Views/page-evenement.php");  
?>
            

       
