<?php

// ne pas oublier de changer le host des 2 fonction

    function connection_bdd() {
        try
        {
           // $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
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

    function m_inscription_event($nom, $prenom, $password_non_crypte, $email, $tel, $class_client, $pseudo, $ville, $cp){
        $bdd= connection_bdd();
        // On crypte le mot de passe
        $password = md5($password_non_crypte);

        $requete = $bdd->prepare("INSERT INTO `client`(`nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`) VALUES ('$nom', '$prenom', '$tel', '$email', '$class_client', '$pseudo', '$password', '$cp')");
        $requete->execute();     
    
        $res = $bdd->prepare("SELECT * FROM client WHERE `nomcli` = '$nom'");
        $res->execute();

        $rows = $res->rowCount();

        echo "requete : INSERT INTO `client`(`nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`) VALUES ('$nom', '$prenom', '$tel', '$email', '$class_client', '$pseudo', '$password', '$cp') <br>";
        echo "rowCount: ".$rows."<br>";
        if ($rows == 0) {
          return 0;
        }else{
          return 1;
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

    function Suprimer_evenement($select){
        $bdd= connection_bdd();
        $requete = $bdd->prepare('DELETE * FROM `evenement` WHERE `idevent` LIKE "'.$select.'"');

        $_SESSION["resultat"] = $requete ->execute();
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

    function Trie_code_postal($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement` WHERE `cp` LIKE "'.$select.'"');
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
    function Trie_date($select){

        $bdd= connection_bdd();
        $requete = $bdd->prepare('SELECT * FROM `evenement`  WHERE `debutevent` >=  "'.$select.'"');
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