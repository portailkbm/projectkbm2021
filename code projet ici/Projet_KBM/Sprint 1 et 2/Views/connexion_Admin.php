<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   	<link rel="stylesheet" href="../css/style-connexion-admin.css?v=<?php echo time() ?>" />
		<title>KBM-Client</title>
	</head>
<body >
	<header>
		<a href="../Views/main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Administrateur</h1>

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

	<div id="principale"> <!-- option pour l'administrateurs uniquement-->
		<div id="Evenement">
			<div id="contenurtitre">
				<h2>Evenement(visible que par l'admin)</h2>
			</div>
			<div class ="contenueuractionevenement">
				<div class="buttonevenement">
					<button onclick="apparitionCreerevenement()" >Creer</button>
				</div>

				<div class="buttonevenement">
					<button onclick="apparitionModifierevenement()" >Modifier</button>
				</div>
				<div class="buttonevenement">
					<button onclick="apparitionSuppreimerevenement()" >Supprimer</button>
				</div>
			</div>

			<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/event_crea.php">
				<div id="conteneurglobalinputCreer" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
						<div class="conteneurinput">
							<h2>Creer un envenement :</h2>
							<br>
							<div>
								Activer/Desactiver évènement
								<label class="switch">
									<input type="checkbox">
									<span class="slider round"></span>
								</label>
							</div>
							<div>
								Date debut :
								<input id="date" type="date" name="date_debut" value="2017-06-01">
							</div>
							<div>
								Date de fin :
								<input id="date" type="date" name="date_fin" value="2017-06-01">
							</div>
							<div>
								<label for="appt-time"> Heure de debut :</label>
								<input id="appt-time" type="time" name="timedebut" value="13:30">
							</div>
							<div>
								<label for="appt-time"> Heure de fin :</label>
								<input id="appt-time" type="time" name="timefin" value="13:30">
							</div>
							<div>
								Nom Evenement
								<input type="text" id="name" name="name"  size="25">
							</div>
							<div>
								Code Postal
								<select class="element champselect" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*">
									<option value="">--Votre Code Postal--</option>
									<?php
										include_once ( "../models/modelevenement.php" );
										Select_Code_Postal_all();    
									?>
								</select> 
							</div>
							<br>
							<div>
								<button type="submit">valider</button>
								<button onclick="apparitionCreerevenement()">annuler</button>
							</div>
						</div>
						<div class="flexinput"></div>
					</div>
				</div>
			</form>

			<div id="conteneurglobalinputModifier" style = "display: none">
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
			<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/event_crea.php">
				<div id="conteneurglobalinputSupprimer" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
						<div class="conteneurinput">
							Selectionner un évènement à supprimer

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
											Visualiser_Sup();
										?>
								</tbody>
							</table> 
						</div>
						</div> 
						<div class="flexinput"></div>
						</div>
					</div>
				</div>
			</form>


		<div id = "Production">
			<h1>Production</h1>
			<div class="contenueuractionevenement">

				<div class="buttonevenement">
					<button  onclick="apparitionchoixproduction()" >Producteur</button>
				</div>

				
				<div class="buttonevenement">
					<button onclick="apparitionexploitation()" >Exploitation</button>
				</div>

				
				<div class="buttonevenement">
					<button onclick="apparitionproduit()" >Produits</button>
				</div>
				
			</div>


			<!-- choix option pour producteur -->

			<div id="choixproducteur" style="display:none">
			<h3>Producteur</h3>
				<div class="contenueuractionevenement" style ="background-color:#68af29">

					<div class="buttonevenement" >
						<button onclick="apparition_ajouter_producteur()" >Ajouter</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_modifier_producteur()" >Modifier</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_supprimerProducteur()" >supprimer</button>
					</div>

				</div>

			</div>
				<!-- Creation producteur -->
				<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/crea_producteur_ctrl.php">
					<div id="ajouter_producteur" style = "display: none">
						<div class = "conteneurevenement">
							<div class="flexinput"></div>
							<div class="conteneurinput">
								<h2>Ajouter un producteur :</h2>
								<br>
								
								<div>
									<label for="pet-select">Civilité:</label>

									<select name="civil" id="pet-select">
										<option value="">--choix--</option>
										<option value="Mr">MR</option>
										<option value="Mme">Mme</option>
									</select>
								</div>
								<div>
									Nom :
									<input type="text" id="name" name="nom"  size="25">
								</div>
								<div>
									Prenom :
									<input type="text" id="name" name="prenom"  size="25">
								</div>
								<div>
									Mobile :
									<input type="text" id="name" name="mobile"  size="25">
								</div>
								<div>
									Fixe :
									<input type="text" id="name" name="fixe"  size="25">
								</div>
								<div>
									Adresse mail :
									<input type="text" id="name" name="mail"  size="25">
								</div>
								<div>
									Adresse :
									<input type="text" id="name" name="ad"  size="25">
								</div>
								<div>
								Code Postal
									<select class="element champselect" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*">
										<option value="">--Votre Code Postal--</option>
										<?php
											include_once ( "../models/modelevenement.php" );
											Select_Code_Postal_all();    
										?>
									</select> 
							    </div>
								<br>
								<div>
									<button type="submit">valider</button>
									<button onclick="apparitionCreerevenement()">annuler</button>
								</div>
							</div>
							<div class="flexinput"></div>
						</div>
					</div>
				</form> 

					<!-- Modifier producteur -->
				
				<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/crea_producteur_ctrl.php">
					<div id="modifier_producteur" style = "display: none">
						<div class = "conteneurevenement">
							<div class="flexinput"></div>
							<div class="conteneurinput">
								<h2>Modifier un producteur :</h2>
								<br>
								
								<div>
									<label for="pet-select">Producteur:</label>

									<select name="exp" id="pet-select">
										<option value="">--choix--</option>
										<?php
										include_once ("../models/modelproduit.php");
										SelectProducteur();
										?>
									</select>
								</div>
								<div>
									<label for="pet-select">Civilité:</label>

									<select name="civil" id="pet-select">
										<option value="">--choix--</option>
										<option value="Mr">MR</option>
										<option value="Mme">Mme</option>
									</select>
								</div>
								<div>
									Nom :
									<input type="text" id="name" name="nom"  size="25">
								</div>
								<div>
									Prenom :
									<input type="text" id="name" name="prenom"  size="25">
								</div>
								<div>
									Mobile :
									<input type="text" id="name" name="mobile"  size="25">
								</div>
								<div>
									Fixe :
									<input type="text" id="name" name="fixe"  size="25">
								</div>
								<div>
									Adresse mail :
									<input type="text" id="name" name="mail"  size="25">
								</div>
								<div>
									Adresse :
									<input type="text" id="name" name="ad"  size="25">
								</div>
								<div>
								Code Postal
									<select class="element champselect" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*">
										<option value="">--Votre Code Postal--</option>
										<?php
											include_once ( "../models/modelevenement.php" );
											Select_Code_Postal_all();    
										?>
									</select> +
							    </div>
								<br>
								<div>
									<button type="submit">valider</button>
									<button onclick="apparitionCreerevenement()">annuler</button>
								</div>
							</div>
							<div class="flexinput"></div>
						</div>
					</div>
				</form> 


				<!-- Supression producteur -->
				<div id="supprimerProducteur" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
							<div class="conteneurinput">
								Selectionner un évènement à supprimer producteur

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
													include_once ("../models/modelproduit.php");
													VisualiserProducteurSup();
												?>
										</tbody>
									</table> 
								</div>
							</div> 
						<div class="flexinput"></div>
						</div>
					</div>
				</div>



				

			<!-- choix option pour Produit -->

			<div id="choixproduit" style="display:none">
				<div class="contenueuractionevenement" style ="background-color:#68af29">

					<div class="buttonevenement" >
						<button onclick="apparition_ajout_produit()">Ajouter</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_Modifier_produit()" >Modifier</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_supprimerProduit()">supprimer</button>
					</div>

				</div>

			</div>
				<!-- Creation Produit -->
				<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/ctl_crea_prod.php">

					<div id="ajouter_produits" style = "display: none">
						<div class = "conteneurevenement">
							<div class="flexinput"></div>
							<div class="conteneurinput">
								<h2>Ajouter un produit :</h2>
								<br>
								
								<div>
									Nom scientifique:
									<input type="text" id="ns" name="ns"  size="25">
								</div>
								<div>
									Nom français:
									<input type="text" id="nf" name="nf"  size="25">
								</div>
								<div>
									Nom local:
									<input type="text" id="nl" name="nl"  size="25">
								</div>
								
								
								<div>
									<label for="pet-select">Type de produit :</label>

									<select name="slt" id="slt">
										<option value="">--choix--</option>
										<option value="Fruit">Fruit</option>
										<option value="Légume">Légume</option>
									</select>
								</div>
								<br>
								<div>
									<button type="submit">valider</button>
									<button onclick="apparitionCreerevenement()">annuler</button>
								</div>
							</div>
							<div class="flexinput"></div>
						</div>
					</div>
				</form>

					<!-- Modifier produit -->
				
					
					<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/ctl_crea_prod.php">
					<div id="modifier_produit" style = "display: none">
						
							<div class = "conteneurevenement">
								<div class="flexinput"></div>
								<div class="conteneurinput">
									<h2>modifier un produit :</h2>
									<div>
									
								</div>
									<br>
									<div>
								<label for="pet-select">Produit:</label>

								<select name="exp" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								
							</div>
									
									<div>
										Nom scientifique:
										<input type="text" id="ns" name="ns"  size="25">
									</div>
									<div>
										Nom français:
										<input type="text" id="nf" name="nf"  size="25">
									</div>
									<div>
										Nom local:
										<input type="text" id="nl" name="nl"  size="25">
									</div>
									
									
									<div>
										<label for="pet-select">Type de produit :</label>

										<select name="slt" id="slt">
											<option value="">--choix--</option>
											<option value="Fruit">Fruit</option>
											<option value="Légume">Légume</option>
										</select>
									</div>
									<br>
									<div>
										<button type="submit">valider</button>
										<button onclick="apparitionCreerevenement()">annuler</button>
									</div>
								</div>
								<div class="flexinput"></div>
							</div>
						
						</div>
					</form>

			

				<!-- Supression produit -->
				<div id="supprimerProduit" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
							<div class="conteneurinput">
								Selectionner un évènement à supprimer produit :

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
													include_once ("../models/modelproduit.php");
													VisualiserProduitSup();
												?>
										</tbody>
									</table> 
								</div>
							</div> 
						<div class="flexinput"></div>
						</div>
					</div>
				</div>



				

			<!-- choix option pour Exploitation -->
test
			<div id="choixpexploitation" style="display:none">
				<div class="contenueuractionevenement" style ="background-color:#68af29">

					<div class="buttonevenement" >
						<button onclick="apparition_ajout_exploitation()" >Ajouter</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_modifier_exploitation()" >Modifier</button>
					</div>


					<div class="buttonevenement">
						<button  onclick="apparition_SupprimerExploitation()">supprimer</button>
					</div>

					<div class="buttonevenement">
						<button  onclick="apparition_visualiserExploitation()">Visualiser</button>
					</div>

				</div>

			</div>
				<!-- Creation Exploitation -->
				<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/crea_exploitation.php">
					<div id="ajouter_exploitation" style = "display: none">
						<div class = "conteneurevenement">
							<div class="flexinput"></div>
							<div class="conteneurinput">
								<h2>Ajouter une Exploitation :</h2>
								<br>
								<div>
									<label for="pet-select">Producteur:</label>

									<select name="prod" id="pet-select">
										<option value="">-----choix------</option>
										<?php
										include_once ("../models/modelproduit.php");
										SelectProducteur();
										?>	
									</select>
									
								</div>
								
								<div>
									Nom :
									<input type="text" id="name" name="nom"  size="25">
								</div>
								<div>
									Surface :
									<input type="text" id="name" name="surface"  size="25">
								</div>
								
								<div>
									<label for="pet-select">Ville:</label>

									<select name="cp" id="pet-select">
										<option value="">--choix--</option>
										<?php
											include_once ( "../models/modelevenement.php" );
											Select_Code_Postal_all();    
										?>	
									</select>
								</div>
								<div>
									<label for="pet-select">Type d'Exploitation :</label>

									<select name="type" id="pet-select">
										<option value="">--choix--</option>
										<option value="Mr">Mono-Culture</option>
										<option value="Mr">Poly-Culture</option>
										<option value="Mme">Elevage</option>
										<option value="Mr">Mixte</option>
										<option value="Mr">Pêche</option>
										<option value="Mme">Apiculteur</option>
										<option value="Mme">Artisan</option>
									</select>
								</div>
								
								
								<br>
								<div>
									<button type="submit">valider</button>
									<button onclick="apparitionCreerevenement()">annuler</button>
								</div>
							</div>
							<div class="flexinput"></div>
						</div>
					</div>
				</form>

					<!-- Modifier exploitation -->
				<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/crea_exploitation.php">
					<div id="modifier_exploitation" style = "display: none">
						<div class = "conteneurevenement">
							<div class="flexinput"></div>
							<div class="conteneurinput">
								<h2>Modifier une Exploitation :</h2>
								<br>
								<div>
									<label for="pet-select">Exploitation:</label>

									<select name="exp" id="pet-select">
										<option value="">-----choix------</option>
										<?php
										include_once ("../models/modelproduit.php");
										SelectExploitation();
										?>	
									</select>
									
								</div>
								<div>
									<label for="pet-select">Producteur:</label>

									<select name="prod" id="pet-select">
										<option value="">-----choix------</option>
										<?php
										include_once ("../models/modelproduit.php");
										SelectProducteur();
										?>	
									</select>
									
								</div>
								
								<div>
									Nom :
									<input type="text" id="name" name="nom"  size="25">
								</div>
								<div>
									Surface :
									<input type="text" id="name" name="surface"  size="25">
								</div>
								
								<div>
									<label for="pet-select">Ville:</label>

									<select name="cp" id="pet-select">
										<option value="">--choix--</option>
										<?php
											include_once ( "../models/modelevenement.php" );
											Select_Code_Postal_all();    
										?>	
									</select>
								</div>
								<div>
									<label for="pet-select">Type d'Exploitation :</label>

									<select name="type" id="pet-select">
										<option value="">--choix--</option>
										<option value="Mr">type1</option>
										<option value="Mme">type2</option>
									</select>
								</div>
								
								
								<br>
								<div>
									<button type="submit">valider</button>
									<button onclick="apparitionCreerevenement()">annuler</button>
								</div>
							</div>
							<div class="flexinput"></div>
						</div>
						
					</div>
				</form>
			

				<div id="supprimerExploitation" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
							<div class="conteneurinput">
								Selectionner un évènement à supprimer producteur

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
													include_once ("../models/modelproduit.php");
													VisualiserExploitationSup()
												?>
										</tbody>
									</table> 
								</div>
							</div> 
						<div class="flexinput"></div>
						</div>
					</div>
				</div>

<!-- pour faire apparaitre la vue change le display:none en display: inline (ligne:772) -->

				<div id="visualiser_exploitation" style = "display: none">
					<div class = "conteneurevenement">
					<div class="flexinput"></div>
					<div class="conteneurinput">
					<div class="celules">
						<table class="table">
							<thead>
								<tr>
									<th  scope="col">nom sc</th>
									<th  scope="col">nom local</th>
									<th  scope="col">type</th>
									<th  scope="col">Qte</th>
								</tr>
							</thead>
							<tbody id="pointsTable" aligne="center">
								<marquee behavior="scroll" direction="down">
								</marquee>
									<?php
										include_once ("../models/modelproduit.php");
										VisualiserProduit();
									?>
							</tbody>
						</table> 
					</div>
					</div>
					<div class="flexinput"></div>
				</div>
       			</div>

				
				


		</div>
		
     


	</div>


	<!--
		Placer le niveux de code ici
	-->















































	<div id="centrale" style="display:none">
		<div id="moitieG">
			<h1 id="titre" name="titretableau">Gestion du compte</h1>
			<div id="scroll">
			<table>
				<tbody>
					
						<tr>
							<td> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
						</tr>


				</tbody>
			</table>
			</div>
		</div>


		<div id="moitieD">

				<div>
					<a  class="champc  blanc rouge event " onclick="Gestionducompte()">Gestion du compte</a>
				</div>

				<div>
					<a class="champc vert event" onclick="Commande()">Commande</a>
				</div>

				<div>
					<a class="champc vert event" onclick="Suividecommande()">Suivi de commande</a>
				</div>

				<div>
					<a class="champc vert event" onclick="Trouverleslakous()">Trouver les lakous</a>
				</div>

				<div>
					<a class="champc vert event" onclick="Consulterlesinfos()">Consulter les infos</a>
				</div>




		</div>


	</div>
	
	<script  src="../js/Administrateur.js"></script>
</body>

</html>