<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style-inscription.css?<?php echo time(); ?>" />
    <title> KBM - Inscription </title>
</head>
<body class="rouge">
    <div id="en-tete">
        <a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /></a> 
        <h1 id="titre"> Inscription </h1> 

    </div>

    <form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/inscription_controller.php">
        <div id=conteneurprincipale>
            <div id=conteneurformulaire>
                <div id="inul"></div>
                <div id="gformulaire">
                    <div>
                        <p>Nom</p>
                        <input  class="element champ" type="text" name="nom" id="nom" placeholder="Votre nom" required pattern=".*\S.*" />
                    </div>
                    <div>
                        <p>Pseudo</p>
                    <input  class="element champ" type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required pattern=".*\S.*"  />
                    </div>
                    <div>
                        <p>Mail</p>
                        <input style="width: 16em;"  class="element mail" type="email" name="mail" id="mail" placeholder="Votre mail" required pattern=".*\S.*" /> 
                    </div>
                    <div>
                        <p>Ville</p>
                        <input  class="element champ" type="text" name="ville" id="ville" placeholder="Votre ville" required pattern=".*\S.*"  />
                    </div>

                    <div>
                        <p>Mots de passe</p>
                        <input  class="element champ" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required pattern=".*\S.*" />
                    </div>

                </div>

                <div id="dformulaire">
                    <div>
                        <p>Prenom</p>
                        <input  class="element champ" type="text" name="prenom" id="prenom" placeholder="Votre pr??nom" required pattern=".*\S.*"  />
                    </div>
                    <div>
                        <p>T??l??phone (+33;+590...)</p>
                        <input  class="element champ" type="tel" name="telephone" id="telephone" placeholder="Votre telephone"  required pattern="[+]{1}[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}"/>
                    </div>
                    <div>
                        <p style="font-size: xx-large; color: #dc4e56 ;">Tous les champs sont obligatiore</p>
                    </div>


                    <div>
                        <p>Code Postal</p>
                        <select class="element champselect" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*">
                            <option value="">--Votre Code Postal--</option>
                            <?php
                                include_once ( "../models/modelevenement.php" );
                                Select_Code_Postal_all();    
                            ?>
                        </select> 
                    </div>

                    <div>
                        <p>comfirmation de mots de passe</p>
                        <input class="element champ" type="password" name="Cmdp" id="Cmdp" placeholder="Confirmer votre mot de passe" required pattern=".*\S.*"  />
                    </div>

                </div>
                <?php 
                    if(isset($_SESSION['message'])){
                        echo '<div class="texte">'.$_SESSION['message'].'</div>';
                    }
                ?>

            </div>
        </div>
        <div id=conteneurbouton></div>
            <div class="element conteneur" id="ligne3">
                <button class="element vert bouton" type="submit" >S'inscrire</button>
                <a href="main.php" class="element rouge bouton"> Annuler </a>
            </div>
        </div>
    </form>

   


   





    <!--
    <form name="fomulaire" method='POST' id="formulaire"  action="inscription_controller.php">
        <div class="element conteneur" id="ligne1">
            <div class="texte"> Nom : </div> <input  class="element champ" type="text" name="nom" id="nom" placeholder="Votre nom" required pattern=".*\S.*" />
            <div class="texte"> Pr??nom : </div> <input  class="element champ" type="text" name="prenom" id="prenom" placeholder="Votre pr??nom" required pattern=".*\S.*"  />
            <div class="texte"> Mail : </div> <input  class="element mail" type="email" name="mail" id="mail" placeholder="Votre mail" required pattern=".*\S.*" /> 
            <div class="texte"> Ville : </div> <input  class="element champ" type="text" name="ville" id="ville" placeholder="Votre ville" required pattern=".*\S.*"  />
            <div class="texte"> Code Postal : </div> <input  class="element champ" type="text" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*"  />
        </div>
           
        <div class="element conteneur">
            <div class="texte"> Tel : </div> <input  class="element champ" type="tel" name="telephone" id="telephone" placeholder="Votre telephone"  required pattern="[+]{1}[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}"/>
            <div class="texte"> Pseudo : </div> <input  class="element champ" type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required pattern=".*\S.*"  />
            <div class="texte"> Mot de passe : </div> <input  class="element champ" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" required pattern=".*\S.*" />
            <input class="element champ" type="password" name="Cmdp" id="Cmdp" placeholder="Confirmer votre mot de passe" required pattern=".*\S.*"  />

        </div>
        <div class="element conteneur" id="ligne3">
            <button class="element vert bouton" type="submit" >S'inscrire</button>
            <a href="main.php" class="element rouge bouton"> Annuler </a>
        </div>
    </form>
            -->

    <?php 
        if (isset($_SESSION['login'])) {
            session_destroy();
            ?>
            <div id="griser" style="display: block;"> </div>
            <div id="dialogue" style="display: block;">
                <h1> Information </h1>
                <p>
                    F??licitation vous avez presque termin??. Veuillez 
                    consulter votre boite mail pour confirmer votre 
                    inscription. Cliquez sur le bouton pour revenir ?? la 
                    page d???accueil.
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

