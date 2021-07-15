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
			<h1 id="titre">Client(Changera par rapport aux statue du compte)</h1>

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

	<div id="principale">
		<div id="Evenement">
			<div id="contenurtitre">
				<h2>Evenement(visible que par l'administratr)</h2>
			</div>
			<div id ="contenueuractionevenement">
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

			<div id="conteneurglobalinputCreer" style = "display:inline">
				<div class = "conteneurevenement">
					<div class="flexinput"></div>
					<div class="conteneurinput">
						<h2>Creer un envenement :</h2>
						<br>
						<div>
							Date debut :
							<input id="date" type="date" value="2017-06-01">
						</div>
						<div>
							Date de fin :
							<input id="date" type="date" value="2017-06-01">
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
							<input type="text" id="name" name="nameevnement"  size="25">
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
							<button>valider</button>
							<button>annuler</button>
						</div>
					</div>
					<div class="flexinput"></div>
				</div>
			</div>

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

			<div id="conteneurglobalinputSupprimer" style = "display: none">
				<div class = "conteneurevenement">
					<div class="flexinput"></div>
					<div class="conteneurinput">
						supprimer
						<div>
							Nom
							<input type="text" id="name" name="name"  size="25">
						</div>
						<div>
							Nom
							<input type="text" id="name" name="name"  size="25">
						</div>
						<div>
							Nom
							<input type="text" id="name" name="name"  size="25">
						</div>
						<div>
							Nom
							<input type="text" id="name" name="name"  size="25">
						</div>
						<div>
							Nom
							<input type="text" id="name" name="name"  size="25">
						</div>
						<br>
						<div>
							<button>valider</button>
							<button>annuler</button>
						</div>
					</div>
					<div class="flexinput"></div>
					</div>
				</div>
		</div>
	</div>




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