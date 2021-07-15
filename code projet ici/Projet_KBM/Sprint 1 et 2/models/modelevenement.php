<?php
    // session_start();

include_once("Bdd_login.php");
    
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
            }
        }
    }

    function filter_date_futur()
    {
        $bdd= connection_bdd();
        $date = date("Y-m-d");

        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` >= "'.$date.'"');
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
    function Select_Description_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())

        {
            echo ' '.$_SESSION["resultat"]["desevent"].' ';
        }  
    }
    function Select_Im_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $_SESSION["resultat"]['imagevent'] ).'"/>';
        }  
    }

    function Select_Code_Postal_all(){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM ville');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<option valeur="';
            echo $_SESSION["resultat"]['cp'];
            echo '">';
            echo $_SESSION["resultat"]['cp'];
            echo '</option>';
        }
    }
    function Test ()
    {
        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "1"');
        $requete ->execute();
        $_SESSION["resultat"] = $requete ->execute();

        if ( $_SESSION["resultat"] = $requete->fetch())
        {
            while($donnee = $requete->fetch())
            {
              $test = $_SESSION["resultat"]['flyer'];
            }
        }
        
    }

    function Select_FL_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $_SESSION["resultat"]['flyer'] ).'"/>';
        }  
    }
// ligne 223 bugger
    function Cree_Evenement($lib,$deb,$fin,$hd,$hf,$cp){
        $bdd= connection_bdd();
        $requete = $bdd->prepare("INSERT INTO `evenement` (`libevent`,`debutevent`,`finevent`,`debutevent_hr`,`finevent_hr`,`cp`) VALUES ('$lib','$deb','$fin','$hd','$hf','$cp') ");
     /*   $requete = $bdd->prepare('INSERT INTO `evenement` (`idevent`, `classement`, `typeevent`,
         `libevent`, `desevent`, `photoevent`, `flyer`, `debutevent`, `debutevent_hr`,
          `finevent`, `finevent_hr`, `cr_event`, `visevent`, `cp`, `idlak`, `idassoc`) VALUES (NULL,
           NULL, NULL, $lib, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ``, NULL, NULL) ');*/
        
        $requete ->execute();
    }

    function Modifier_Evenement($lib,$deb,$fin,$hd,$hf,$cp,$select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('UPDATE `evenement` SET libevent = `$lib`,debutevent=`$deb`,finevent=`$fin`,debutevent_hr=`$hd`,finevent_hr=`$hf`,cp=`$cp` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();
    }

     function Supprimer_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute(); 
    }
    
    function Select_Flyer_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            //echo '<a href='.$_SESSION["resultat"]['date'].' download="">télécharcher le lien</a>';
            echo "<a href='../controlleur/controller_telechargement.php?id=".$_SESSION["resultat"]["idevent"]."'>";
            echo "télécharcher le lien</a>";
        }  
    }

/*
    function Select_Flyer_Evenement($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');
        $requete ->execute();

        $_SESSION["resultat"] = $requete ->execute();
        while($_SESSION["resultat"] = $requete->fetch())
        {
            //echo '<p class="fichier"><strong>'.htmlspecialchars($_SESSION["resultat"]['date']).'</strong> : <a href="'.$_SESSION["resultat"]['fichier'].'">'. htmlspecialchars($_SESSION["resultat"]['fichier']).'</a></p>';
            echo '<a href='.$_SESSION["resultat"]['date'].' download="">télécharcher le lien</a>';
           
        }  
    }*/



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
    echo ' idlak = '.$donnee["idlak"].'</br></br>'; 
    */
?>