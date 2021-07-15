<?php

    include("../models/modelevenement.php");
    Cree_Evenement($_POST["name"],$_POST["date_debut"],$_POST["date_fin"],$_POST["timedebut"],$_POST["timefin"],$_POST["cp"]);

?>