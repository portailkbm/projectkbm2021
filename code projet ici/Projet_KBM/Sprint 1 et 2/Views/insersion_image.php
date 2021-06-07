<?php
   if ( isset($_POST["valider"])){
       include_once ("../Views/page-evenement.php");
       $bdd= connection_bdd();
       //$requete = $bdd->prepare ("INSERT INTO e");
       //$requete ->execute(); 
   }
?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
    </head>
    <body>
        <form name="fo" method="POST" action="" enctype="multipart/form-data">
            <imput type="file" name="image" /><br />
            <imput type="submit" name="valider" value="Charger" /><br />
        </form>
    </body>
</html>

