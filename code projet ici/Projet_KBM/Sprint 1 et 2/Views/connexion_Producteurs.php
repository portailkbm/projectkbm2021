<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style-connexion-admin.css?v=<?php echo time() ?>" />
    <title>Producteurs</title>
</head>
<body>
<script  src="../js/producteurs.js"></script> 
    <header>
		<a href="../Views/main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Producteurs</h1>

		</div>
		

	</header>
	<br>
        <div id="conteneursatue">
            <div id=divopserstatue></div>
            <div id="statue">
                <div>
                    <img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png"  width="70" height="80">

                </div>
                <div>
                    <p>
                        <?php 
                            session_start();
                            if(isset($_SESSION['login'])){
                                //echo $_SESSION['login'];
                                echo $_SESSION['pseudo'];
                                
                            }
                        ?>
                    </p>
                    <p>adrresse@mail</p>
                </div>
            </div>
        </div>


    <div id="choixproducteur" style="display:inline">
            
            <div class="contenueuractionevenement" style ="background-color:#68af29">

                <div class="buttonevenement" >
                    <button onclick="apparition_ajouter_produit_producteur()">Ajouter</button>
                </div>


                <div class="buttonevenement">
                    <button onclick="modifier_produit_producteur()">Modifier</button>
                </div>

                <div class="buttonevenement">
                    <button onclick="supprimer_produit_producteur()">Supprimer</button>
                </div>


                <div class="buttonevenement">
                    <button onclick="visualiser_produit_producteur()">visualiser</button>
                </div>

            </div>

        <div>
            
            <!--ajouter un produits a la vente-->
        <form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/ajout_produit.php">

            <div id="ajouter_produit_vente" style = "display: none">

            <h1>Ajouter un produit à la vente</h1>
                    <div class = "conteneurevenement">
                        <div class="flexinput"></div>
                        <div class="conteneurinput">
                            <h2>Ajouter un produit a la vente :</h2>
                            <br>
                            <div style="display: flex ; flex-direction: row">
                                <div style=" flex:1"> Nom Production</div>
                                    <div style=" flex:1">
                                        <input type="text" id="name" name="surface"  size="25">
                                    </div>
                                    
                            </div>
                            <div style="display: flex ; flex-direction: row">
                                <label for="pet-select" style=" flex:1">Exploitation:</label>

                                <select name="exp" id="pet-select" style=" flex:1">
                                    <option value="">-----choix------</option>
                                    <?php
                                        include_once ("../models/modelproduit.php");
                                        SelectExploitation();
                                    ?>	
                                </select>
                                
                            </div>
                            
                            
                            <div style="display: flex ; flex-direction: row ;">
                                <label for="pet-select">produits:</label>

                                <select name="pdr" id="pet-select">
                                    <option value="">-----choix------</option>
                                    <?php
                                        include_once ("../models/modelproduit.php");
                                        SelectProduit();
                                    ?>	
                                </select>
                                <div  style=" flex:1">
                                        Qte:
                                    </div>
                                
                                <div  style=" flex:1">
                                        <input type="int" id="name" name="qte"  size="3">
                                    </div>
                                
                                <div  style=" flex:1">
                                        Unité
                                    </div>
                                
                                <div  style=" flex:1">
                                        <input type="int" id="name" name="unt"  size="3">
                                    </div>
                                
                                
                                <div  style=" flex:1">
                                        Prix 
                                    </div>
                                
                                    <div  style=" flex:1">
                                        <input type="int" id="name" name="prx"  size="3">
                                    </div>
                            </div>

                            <div style="display: flex ; flex-direction: row">
                                    <div  style=" flex:1">
                                        Date debut :
                                    </div>
                                
                                    <div  style=" flex:1">
                                        <input id="date" type="date" name="date_debut" value="2017-06-01">
                                    </div>
                            </div>

                            <div style="display: flex ; flex-direction: row">
                                
                                <div  style=" flex:1">
                                        Date de fin :
                                    </div>
                                
                                <div  style=" flex:1">
                                        <input id="date" type="date" name="date_fin" value="2017-06-01">
                                    </div>
                            </div>

                            
                            <br>
                            <div style="display: flex ; flex-direction: row">
                                <button type="submit">valider</button>
                                <button onclick="">annuler</button>
                            </div>
                        </div>
                        <div class="flexinput"></div>
                    </div>
                </div>
        </form>
            

                <!-- modifier-->


                <form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/ajout_produit.php">

                    <div id="modifier" style = "display: none">
                        <div class = "conteneurevenement">
                            <div class="flexinput"></div>
                            <div class="conteneurinput">
                                <h2>Modifier un produit a la vente :</h2>
                                <br>
                                <div style="display: flex ; flex-direction: row">
                                    <div style=" flex:1"> Nom Production</div>
                                        <div style=" flex:1">
                                            <input type="text" id="name" name="surface"  size="25">
                                        </div>
                                        
                                </div>
                                <div style="display: flex ; flex-direction: row">
                                    <label for="pet-select" style=" flex:1">Exploitation:</label>

                                    <select name="exp" id="pet-select" style=" flex:1">
                                        <option value="">-----choix------</option>
                                        <?php
                                            include_once ("../models/modelproduit.php");
                                            SelectExploitation();
                                        ?>	
                                    </select>
                                    
                                </div>
                                
                                
                                <div style="display: flex ; flex-direction: row ;">
                                    <label for="pet-select">produits:</label>

                                    <select name="pdr" id="pet-select">
                                        <option value="">-----choix------</option>
                                        <?php
                                            include_once ("../models/modelproduit.php");
                                            SelectProduit();
                                        ?>	
                                    </select>
                                    <div  style=" flex:1">
                                            Qte:
                                        </div>
                                    
                                    <div  style=" flex:1">
                                            <input type="int" id="name" name="qte"  size="3">
                                        </div>
                                    
                                    <div  style=" flex:1">
                                            Unité
                                        </div>
                                    
                                    <div  style=" flex:1">
                                            <input type="int" id="name" name="unt"  size="3">
                                        </div>
                                    
                                    
                                    <div  style=" flex:1">
                                            Prix 
                                        </div>
                                    
                                        <div  style=" flex:1">
                                            <input type="int" id="name" name="prx"  size="3">
                                        </div>
                                </div>

                                <div style="display: flex ; flex-direction: row">
                                        <div  style=" flex:1">
                                            Date debut :
                                        </div>
                                    
                                        <div  style=" flex:1">
                                            <input id="date" type="date" name="date_debut" value="2017-06-01">
                                        </div>
                                </div>

                                <div style="display: flex ; flex-direction: row">
                                    
                                    <div  style=" flex:1">
                                            Date de fin :
                                        </div>
                                    
                                    <div  style=" flex:1">
                                            <input id="date" type="date" name="date_fin" value="2017-06-01">
                                        </div>
                                </div>

                                
                                <br>
                                <div style="display: flex ; flex-direction: row">
                                    <button type="submit">valider</button>
                                    <button onclick="">annuler</button>
                                </div>
                            </div>
                            <div class="flexinput"></div>
                        </div>
                    </div>
                </form>

                <!-- Section Supprimer-->

                <div id="Supprimer" style = "display: none">
                <h1>Supprimer </h1>
				<div class = "conteneurevenement">
					<div class="flexinput"></div>
					<div class="conteneurinput">
						<div class="celules">
							<table class="table">
								<thead>
									<tr>
										<th  scope="col">Organisateur</th>
										<th  scope="col">Activités</th>
										<th  scope="col">Lieux</th>
										<th  scope="col">Date</th>
									</tr>
								</thead>
								<tbody id="pointsTable" aligne="center">
									<marquee behavior="scroll" direction="down">
									</marquee>
										<?php
											include_once ("../models/modelevenement.php");
											visualiser();
										?>
								</tbody>
							</table> 
						</div>
					</div>
					<div class="flexinput"></div>
				</div>
			</div>



            <!-- Section Visualiser-->

            <div id="voir" style = "display: none">
                <h1>Visualiser </h1>
				<div class = "conteneurevenement">
					<div class="flexinput"></div>
					<div class="conteneurinput">
						<div class="celules">
							<table class="table">
								<thead>
									<tr>
										<th  scope="col">Organisateur</th>
										<th  scope="col">Activités</th>
										<th  scope="col">Lieux</th>
										<th  scope="col">Date</th>
									</tr>
								</thead>
								<tbody id="pointsTable" aligne="center">
									<marquee behavior="scroll" direction="down">
									</marquee>
										<?php
											include_once ("../models/modelevenement.php");
											visualiser();
										?>
								</tbody>
							</table> 
						</div>
					</div>
					<div class="flexinput"></div>
				</div>
			</div>





    </div>


       
    <script  src="../js/producteurs.js"></script> 
</body>
    
</html>