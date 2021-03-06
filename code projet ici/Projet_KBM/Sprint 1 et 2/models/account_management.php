<?php
    include_once("Bdd_login.php");

// m_function_name : fonction model
// c_function_name : fonction controleur (à faire)

// fonction d'inscription d'un client 
function m_inscription_client($nom, $prenom, $password_non_crypte, $email, $tel, $class_client, $pseudo, $ville, $cp){

        $bdd= connection_bdd();
        // On crypte le mot de passe
        $password = md5($password_non_crypte);

        $requete = $bdd->prepare("INSERT INTO `client`(`nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`) VALUES ('$nom', '$prenom', '$tel', '$email', '$class_client', '$pseudo', '$password', '$cp')");

        // On envoie la requête
        $requete->execute();     
    
        $res = $bdd->prepare("SELECT * FROM client WHERE `nomcli` = '$nom'");
        $res->execute();

        $rows = $res->rowCount();
/*
        echo "requete : INSERT INTO `client`(`nomcli`, `prencli`, `telcli`, `mailcli`, `categoriecli`, `pseudocli`, `mdpcli`, `cp`) VALUES ('$nom', '$prenom', '$tel', '$email', '$class_client', '$pseudo', '$password', '$cp') <br>";
        echo "rowCount: ".$rows."<br>";

        INSERT INTO `client`(`nomcli`, `prencli`, `telcli`, `mailcli`, `pseudocli`, `mdpcli`, `cp`) VALUES ('Big','a','+590690942753','ads@dsdf.sf','test','123','97139')
*/
        if ($rows == 0) {
          return 0;
        }else{
          return 1;
        }
}

/*
* la connexion se fait avec le pseudo
*/
function m_connexion_client($pseudo, $password_non_crypte ){

    $bdd= connection_bdd();
    // On crypte le mot de passe
    $password = md5($password_non_crypte);

    // PASSWORD A RECRYPTER !!!!!!!!
    $requete = $bdd->prepare("SELECT * FROM client WHERE pseudocli = '".$pseudo."' AND mdpcli = '".$password."'");
    $requete->execute();

    if($requete->rowCount() == 1){    
     //   session_start();
        while($donnee = $requete->fetch()){
            $_SESSION["login"] = $pseudo;
            return $donnee["categoriecli"];

            /**
             * Administrateur poste maj
             */
            /*
            if ($donnee["admin"] == 1){
                $_SESSION["id_client"] = $donnee["idcli"];
                $_SESSION["etat"]  = 1;
                $_SESSION["login"] = $pseudo;
                return $donnee["categoriecli"];
            }     */   
        }
        return 0;
    } else{
        return 0; 
    }
}

/*
* la connexion se fait avec le pseudo
*/
/*
function m_connexion_client($pseudo, $password_non_crypte ){
    /*
    //connection à la base de donnée
    $useur = 'root';
    $pass = 'root';
    try
    {  
      include_once("Bdd_login.php");     
      //$bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', constant("BD_USER") , constant("BD_MDP"));
      $bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME"), $useur , $pass);
      //$bdd = new PDO('mysql:host=localhost;dbname=bdd', $useur , $pass);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
    $bdd= connection_bdd();
    // On crypte le mot de passe
    $password = md5($password_non_crypte);

    // PASSWORD A RECRYPTER !!!!!!!!
    $requete = $bdd->prepare("SELECT * FROM client WHERE pseudocli = '".$pseudo."' AND mdpcli = '".$password."'");
    $requete->execute();

    if($requete->rowCount() == 1){    
        session_start();
        while($donnee = $requete->fetch()){
          $_SESSION["id_client"] = $donnee["idcli"];
          $_SESSION["etat"]  = 1; 
          return $donnee["categoriecli"];
        }
        return 0;
    } else{
        return 0; 
    }
}*/



// Modification des informations du compte
function m_modifier_compte(){
      
      if (isset($_POST['submitnom']))
      {
          include_once ("model.php");
         // modification("nomcli", $_POST["nom"],1);
      }
  
      elseif (isset($_POST['submitprenom']))
      {
          include_once ("model.php");
         // modification("prencli", $_POST["prenom"],1);
      }
  
      elseif (isset($_POST['submittel']))
      {
          include_once ("model.php");
          //modification("telcli", $_POST["tel"],1);
      }
  
      elseif (isset($_POST['submitmail']))
      {
          include_once ("model.php");
         // modification("mailcli", $_POST["mail"],1);
      }
  
      elseif (isset($_POST['submitpseudo']))
      {
          include_once ("model.php");
         // modification("pseudocli", $_POST["pseudo"],1);
      }
  
      elseif (isset($_POST['submitmdp']))
      { 
          $_POST["mdp"] = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
          include_once ("model.php");
         // modification("mdpcli", $_POST["mdp"],1);
      }
  
      elseif (isset($_POST['submitcp']))
      {
          include_once ("model.php");
         // modification("cp", $_POST["cp"],1);
      } 
}
// Fonction de déconnexion
function m_deconnexion(){

    session_start();
    //unset($_SESSION["id_client"]);
    //unset($_SESSION["etat"]);
    unset($_SESSION["login"]);
    unset($_SESSION["pseudo"]);
    session_destroy();
    
    //Redirection vers la page de connexion
    header("Location: ../Views/main.php");
}
