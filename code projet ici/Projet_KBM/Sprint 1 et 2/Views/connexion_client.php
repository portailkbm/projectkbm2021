<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
<<<<<<< HEAD
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   	<link rel="stylesheet" href="../css/style-connexion-admin.css?v=<?php echo time() ?>" />
=======
	   	<link rel="stylesheet" href="../css/style-connexion-pageaccueil-main.css" />
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
		<title>KBM-Client</title>
	</head>
<body >
	<header>
<<<<<<< HEAD
		<a href="../Views/main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Client(Changera par rapport au statut du compte)</h1>
=======
		<a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Client</h1>
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6

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
<<<<<<< HEAD
                        if(isset($_SESSION['login'])){
							//echo $_SESSION['login'];
							echo $_SESSION['pseudo'];
							
						}
=======
                        echo $_SESSION["login"];
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
                    ?>
                </p>
				<p>adrresse@mail</p>
			</div>
		</div>
	</div>

<<<<<<< HEAD
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

					<!-- Modifier producteur -->
				<div id="modifier_producteur" style = "display: none">
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

								<select name="pets" id="pet-select">
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



				

			<!-- choix option pour Exploitation -->

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

				</div>

			</div>
				<!-- Creation Exploitation -->
				<div id="ajouter_exploitation" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
						<div class="conteneurinput">
							<h2>Ajouter une Exploitation :</h2>
							<br>
							<div>
								<label for="pet-select">Producteur:</label>

								<select name="pets" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								
							</div>
							
							<div>
								Nom :
								<input type="text" id="name" name="name"  size="25">
							</div>
							
							<div>
								<label for="pet-select">Ville:</label>

								<select name="pets" id="pet-select">
									<option value="">--choix--</option>
									<option value="pap">pap</option>
									<option value="lamentin">lamentin</option>
								</select>
							</div>
							<div>
								<label for="pet-select">Type d'Exploitation :</label>

								<select name="pets" id="pet-select">
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

					<!-- Modifier exploitation -->
				<div id="modifier_exploitation" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
						<div class="conteneurinput">
							<h2>Modifier une Exploitation :</h2>
							<br>
							<div>
								<label for="pet-select">Exploitation:</label>

								<select name="pets" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								
							</div>
							<div>
								<label for="pet-select">Producteur:</label>

								<select name="pets" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								
							</div>
							
							<div>
								Nom :
								<input type="text" id="name" name="name"  size="25">
							</div>
							
							<div>
								<label for="pet-select">Ville:</label>

								<select name="pets" id="pet-select">
									<option value="">--choix--</option>
									<option value="pap">pap</option>
									<option value="lamentin">lamentin</option>
								</select>
							</div>
							<div>
								<label for="pet-select">Type d'Exploitation :</label>

								<select name="pets" id="pet-select">
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



		</div>
		<br>

		<h2> fonctionnalite disponible uniquement pour le producteur ici</h2>

<br>
<br>
<br>

		 <!-- option pour le producteurs-->
		
		 	<div id="choixproducteur" style="display:inline">
		 		<h2>Producteurs</h2>
				<div class="contenueuractionevenement" style ="background-color:#68af29">

					<div class="buttonevenement" >
						<button onclick="apparition_ajouter_produit_producteur()">Ajouter</button>
					</div>


					<div class="buttonevenement">
						<button onclick="apparition_visualiser_produit_producteur()">visualiser</button>
					</div>

				</div>

			</div>

			<!--ajouter un produits a la vente-->
			<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/event_ajout_produit.php">
			<div id="ajouter_produit_vente" style = "display: none">
					<div class = "conteneurevenement">
						<div class="flexinput"></div>
						<div class="conteneurinput">
							<h2>Ajouter un produit a la vente :</h2>
							<br>
							<div>
								<label for="pet-select">Exploitation:</label>

								<select name="pets" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								
							</div>
							
							<div>
								<label for="pet-select">produits:</label>

								<select name="pets" id="pet-select">
									<option value="">-----choix------</option>
									<?php
									   include_once ("../models/modelproduit.php");
									   SelectProduit();
									?>	
								</select>
								Qte
								<input type="int" id="name" name="name"  size="3">
							</div>

							
							<br>
							<div>
								<button type="submit">valider</button>
								<button onclick="">annuler</button>
							</div>
						</div>
						<div class="flexinput"></div>
					</div>
				</div>
			</form>
				<!--visualiser les produits -->
				<div id="visualiser_produit" style = "display: none">
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


	<!--
		Placer le niveux de code ici
	-->















































	<div id="centrale" style="display:none">
=======
	<br>
	<div id="centrale">
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
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
	
<<<<<<< HEAD
	<script  src="../js/Administrateur.js"></script>
=======
	<script type="text/javascript" src="js/Client.js"></script>
>>>>>>> 22e3521df6bfcf2ffac1b5bf8150c9c7cb31abd6
</body>

</html>