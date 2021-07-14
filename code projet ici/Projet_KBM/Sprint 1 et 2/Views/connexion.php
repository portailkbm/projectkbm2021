<?php 
    if (isset($_POST["login"]) && isset($_POST["mdp"])){
        include ('../models/account_management.php');
        $return = m_connexion_client($_POST["login"], $_POST["mdp"]);
        echo $return;
        switch ($return) {
            case 1:
                header('Location: connexion_client.php');
                break;
            case 2:
                header('Location: connexion_membre.html');
                break;
            case 3:
                header('Location: connexion_producteur.html');   
                break;
            case 4:
                header('Location: connexion_responsable.html');
                break;
            case 5:
                header('Location: connexion_administrateur.html');
                break;
            default:
                header('Location: connexion.php');
                break;
        } 
        exit();
    }
?>
<!DOCTYPE HTML>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style-connexion-main.css?v=<?php echo time() ?>" />
    <title> KBM - CONNEXION</title>
</head>
<body class="orange">
    <div id="en-tete">
        <h1 id="titre"> Connexion </h1>
       <a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>  
    </div>
        <form id="formulaire" method="post" action="../controlleur/connexion_controller.php">
            <div class="element conteneur">
               

                <input  class="element champ" type="text" name="login" id="login" placeholder="Votre login" />
                <input  class="element champ" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" />
                
            </div>
            <a id="mdpoublier" href=""> 
                mot de passe/pseudo oublié ?<br>
                essais client : pseudo : C_pseudo mdp :lol<br>
                essais administrateur : pseudo : A_pseudo mdp :lol<br>
                essais membre : pseudo : M_pseudo mdp :lol<br>
                essais responsable : pseudo : R_pseudo mdp :lol<br>
                essais producteur : pseudo : P_pseudo mdp :lol<br>
                <?php 
                if(isset($_SESSION['message'])){
                    echo '<div class="texte">'.$_SESSION['message'].'</div>';
                }
            ?>
            </a>
            <div class="element conteneur">
                <button class="champ vert" id="bouton" type="submit" >Connexion</button>
            </div>
        </form>
</body>


