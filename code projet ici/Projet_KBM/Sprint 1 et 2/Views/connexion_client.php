<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-connexion-admin.css?v=<?php echo time() ?>" />
		<title>KBM-Client</title>
	</head>
<body >
	<header>
		<a href="../Views/main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Client</h1>

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
				<h2>Evenement</h2>
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

			<div id="conteneurglobalinputCreer" style = "display: none">
				<div class="flexinput"></div>
				<div class="conteneurinput">
					Creer
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

			<div id="conteneurglobalinputModifier" style = "display: none">
				<div class="flexinput"></div>
				<div class="conteneurinput">
					Modifier
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

			<div id="conteneurglobalinputSupprimer" style = "display: none">
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
	
	<script type="text/javascript" src="js/Administrateur.js"></script>
</body>

</html>