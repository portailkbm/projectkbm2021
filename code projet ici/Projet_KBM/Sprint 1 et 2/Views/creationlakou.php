<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/creationlakou.css">
    
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation Lakou</title>
</head>
<body>
    
    <a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" width="5%"/> </a>
    <div class="container">
        <div class="content">
            <div class=topcontainer>
                <div class="top1">
                    <p>
                        Nom : <?php
                                    include_once ( "../models/modellakou.php" );
                                    Select_Nom($_GET ["id"]);    
								?>
                        <br>
                        Ville : <?php
										include_once ( "../models/modellakou.php" );
										Select_Ville($_GET ["id"]);   
									?>
                        <br>
                       
                    </p>
                </div>
                <div class="top2">
                    <p>
                    Activity :
                        <?php
                            include_once ( "../models/modellakou.php" );
                            Select_Presentation($_GET ["id"]);    
						?>
                    </p>
                </div>
            </div>
    
            <!-- Contenu centre div don image défilement -->
            <div class="middlecontainer">
                <div id="conteneurslide">

                    <!-- Conteneur principal de tout le diaporama -->
                    <div class="diapo">
                        <!-- Conteneur des "diapos" -->
                        <div class="elements">
                            <!-- Première diapo -->
                            <!-- Deuxième diapo -->
                            <div class="element active">
                                <img src="../Ressources/image1.png" alt="Image 2 ">
                            </div>
                            <!-- Troisième diapo -->
                            <div class="element">
                                <img src="../Ressources/image2.png" alt="Image 3">
                            </div>
                            <!-- quatrieme  diapo -->
                            <div class="element">
                                <img src="../Ressources/image3.png" alt="Image 3">
                            </div>
                        </div>
                        <!-- Flèches de navigation -->
                        <i id="nav-gauche" class="las la-chevron-left"></i>
                        <i id="nav-droite" class="las la-chevron-right"></i>
                    </div>
    
                </div>
            </div>
            <div class="endcontainer">
                <p>
                    Nom prenom  telephone : <?php
                            include_once ( "../models/modellakou.php" );
                            Select_Responsable1($_GET ["id"]);    
						?>
                    <br>
                    Nom prenom  telephone : <?php
                            include_once ( "../models/modellakou.php" );
                            Select_Responsable2($_GET ["id"]);    
						?>
                </p>
            </div>
        </div>
        
    </div>   
</body>
<script src="../js/main.js"></script> 
</html>