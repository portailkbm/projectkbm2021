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
                <div class="texte">
                    <p>
                <?php 
                    session_start();                  
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    }
                ?>
                </p>
                </div>
            </a>
            <div class="element conteneur">
                <button class="champ vert" id="bouton" type="submit" >Connexion</button>
            </div>
        </form>

        <!--

        Pour lancer un code js il faut juste lier le fichiers js à la page.
       exemple de fichiers js tu mets le chemin dans le src

        <script src="../js/jquery-2.1.4.min.js"></script>

        Je vais creer un fichier js qui va qui s'appel test avec une fonction et te mettre un bouton dans la page.html

        toujours mette la liasoin du fichiers apres ton code html

        tu peux envoyer des variables dans le code js
        
        <button onclick="teste(ton parametre si besion)" >test</button>
        
        si tu mets un parametre tu dois faire de meme avec la fonction js
            --->
        <div>
            <h1>button test</h1>
            <button onclick="teste()" >test</button>  
                     

        </div>

        <script src="test.js"></script>s
           


</body>


