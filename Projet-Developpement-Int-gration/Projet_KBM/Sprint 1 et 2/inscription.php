<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style-inscription.css" />
    <title> KBM - Inscription </title>
</head>
<body class="rouge">
    <div id="en-tete">
        <a href="main.php"> <img id="logo-retour" src="Ressources/logo_retour.png" /></a> 
        <h1 id="titre"> Inscription </h1> 

    </div>
    <form name="fomulaire" method='POST' id="formulaire"  action="inscription_controller.php">
        <div class="element conteneur" id="ligne1">
            <div class="texte"> Nom : </div> <input  class="element champ" type="text" name="nom" id="nom" placeholder="Votre nom" required pattern=".*\S.*" />
            <div class="texte"> Prénom : </div> <input  class="element champ" type="text" name="prenom" id="prenom" placeholder="Votre prénom" required pattern=".*\S.*"  />
            <div class="texte"> Mail : </div> <input  class="element champ" type="email" name="mail" id="mail" placeholder="Votre mail" required pattern=".*\S.*" /> 
            <div class="texte"> Ville : </div> <input  class="element champ" type="text" name="ville" id="ville" placeholder="Votre ville" required pattern=".*\S.*"  />
            <div class="texte"> Code Postal : </div> <input  class="element champ" type="text" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*"  />
        </div>
           
        <div class="element conteneur">
            <div class="texte"> Tel : </div> <input  class="element champ" type="tel" name="telephone" id="telephone" placeholder="Votre telephone"  required pattern="[+]{1}[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}"/>
            <div class="texte"> Pseudo : </div> <input  class="element champ" type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required pattern=".*\S.*"  />
            <div class="texte"> Mot de passe : </div> <input  class="element champ" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required pattern=".*\S.*" />
            <input class="element champ" type="password" name="Cmdp" id="Cmdp" placeholder="Confirmer votre mot de passe" required pattern=".*\S.*"  />
            <?php 
                if(isset($_SESSION['message'])){
                    echo '<div class="texte">'.$_SESSION['message'].'</div>';
                }
            ?>

        </div>
        <div class="element conteneur" id="ligne3">
            <button class="element vert bouton" type="submit" >S'inscrire</button>
            <a href="main.html" class="element rouge bouton"> Annuler </a>
        </div>
    </form>

    <?php 
        if (isset($_SESSION['login'])) {
            session_destroy();
            ?>
            <div id="griser" style="display: block;"> </div>
            <div id="dialogue" style="display: block;">
                <h1> Information </h1>
                <p>
                    Félicitation vous avez presque terminé. Veuillez 
                    consulter votre boite mail pour confirmer votre 
                    inscription. Cliquez sur le bouton pour revenir à la 
                    page d’accueil.
                    <?php 
                        echo'Votre pseudo pour vous connecter sera : '.$_SESSION['login'];
                    ?>
                </p>
                <button id="bouton-acceuil" onclick="window.location.href = 'main.php'"> Accueil </button>
                <button id="bouton-annuler" onclick="window.location.href = 'inscription.php'"> Annuler </button>
            </div>
            <?php
        }
    ?>
    
</body>
</html>

