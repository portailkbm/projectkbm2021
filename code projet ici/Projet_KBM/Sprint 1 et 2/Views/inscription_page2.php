<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style-inscription.css" />
    <title> KBM - Inscription </title>
</head>
<body>
    <body class="rouge">
    <div id="en-tete">
        <h1 id="titre"> Inscription </h1>
        <a href="main.php"> <img id="logo-retour" src="Ressources/logo_retour.png" /> </a>  
    </div>
    <form id="formulaire" method="post" action="inscription_page2.html" >
        <div class="element conteneur" id="ligne1">
            <div class="texte"> Nom : </div> <input  class="element champ" type="text" name="nom" id="nom" placeholder="Votre nom" autofocus />
            <div class="texte"> Prénom : </div> <input  class="element champ" type="text" name="prenom" id="prenom" placeholder="Votre prénom" />
            <div class="texte"> Mail : </div> <input  class="element champ" type="email" name="mail" id="mail" placeholder="Votre mail" /> 
            <div class="texte"> Ville : </div> <input  class="element champ" type="text" name="ville" id="ville" placeholder="Votre ville" />
            <div class="texte"> Tel : </div> <input  class="element champ" type="tel" name="telephone" id="telephone" placeholder="Votre telephone" />
        </div>
            

           
        <div class="element conteneur">
            
            <div class="texte"> Pseudo : </div> <input  class="element champ" type="text"  placeholder="Votre pseudo" />

            <div class="texte"> Mot de passe : </div> <input  class="element champ" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" />
            <input class="element champ" type="password" name="Cmdp" id="Cmdp" placeholder="Confirmer votre mot de passe" />

        </div>
        <div class="element conteneur" id="ligne3">
            <input class="element vert bouton" type="submit" value="S'inscrire " >
            <a href="main.html" class="element rouge bouton"> Annuler </a>
        </div>
    </form>
    
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
</body>
</html>