
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-page-evenement.css?<?php echo time(); ?>" />
		<title>KBM-Evenement</title>
	</head>
<body > 
	
	<header>
		<a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" alt="retour" /></a>
		<h1 id="titre">Évenement</h1>
		<div id="wrapper">
			<div id="divopserstatue">
				<p>
					<?php
							include_once ( "../models/modelevenement.php" );
							Select_Flyer($_GET ["id"]);    
					?>
				</p>

				<p>
				<img id="logo-retour" src="
				<?php
				    include_once ( "../models/modelevenement.php" );
					Select_Flyer($_GET ["id"]); 
				?>" alt="retour" />
				</p>
			</div >
				<div id="statue">
					<div>
					<img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png" alt="image"  width="90px" height="120px">
					</div>
					<div>
						<p>
							<?php 
								session_start();
								if(isset($_SESSION['pseudo'])){
									echo $_SESSION['pseudo'];
								}
							?>
						</p>

						<div >
							<button onclick="window.location.href='../controlleur/controleur_deconnexion.php';">Deconnexion</button>
						</div>
				</div>
				</div>
				
			</div>
	
		</div>
		
		

	</header>

	<div id="conteneurprincipale">
		<div id="conteneurphoto">

			<div class="flexb1"></div>
			<div class="imgconteneur">
				<p>
					<?php
						include_once ("../controlleur/controleurevenement.php");
						Select_Im_Evenement($_GET ["id"]);	
					?>
			    </p>
			</div>
			<div class="flexb1"></div>
		</div>

		<div id="conteneurtexte">		
			<div class="flexb1"></div>
			<div class="conteneurtextepresentation">
				<p>
					<?php
							include_once ( "../models/modelevenement.php" );
							Select_Description_Evenement($_GET ["id"]);    
					?>
				</p>
			</div>
			<div class="flexb1"></div>
		</div>

		<div id="conteneurapropos">
			<div class="emplacement">
				<p>Se tiendra du :</p>
			</div>

			<div class="emplacement">
				<formulaire   action ="" méthode =" POST ">
				<P> 
					<?php
						include_once ( "../models/modelevenement.php" );
						Select_Debut_evenement($_GET ["id"]);    
						echo  'AU';
						Select_Fin_evenement($_GET ["id"]);
						echo  '<p> LE LIEU EST : ';
						Select_code_postal($_GET ["id"]);
					?>
				</P>
			</div>
		</div>


		<div id="conteneurorganisateur">
				<div class="flexh1">
					<p>Organisateur:</p>
				</div>

				<div class="flexh1">
					<p>Contact : 
					<?php
				    include_once ("../controlleur/controleurevenement.php");
					echo $_SESSION["resultat"]["libevent"];
				?></p>
				</div>
		</div>
		<?php
			include_once ( "../models/modelevenement.php" );
			Select_Flyer_Evenement($_GET ["id"]);
		?>

		<!-- Fonction Admin-->
		<div id="actiondelimitation">
			<div id="divopserstatue">
				<button onclick="Modifierjs()">Modifier</button>
			</div>
			<div id="divopserstatue">
				<input type="button" value="Supprimer" id="button" onClick="window.location.href='../controlleur/sup_event.php'">
			</div>
			<div id="divopserstatue">
				<button>Archivé</button>
			</div>
		</div>
		<!-- Vue afficher par le bouton modifier -->

		<form name="fomulaire" method='POST' id="formulaire"  action="../controlleur/event_crea.php">
			<div id="Modifier-page-evenement" style = "display:none">
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
								Id
								<select class="element champselect" name="exp" id="cp2" placeholder="Votre Code Postal" required pattern=".*\S.*">
									<?php

										echo '<option valeur="';
										echo $_GET ["id"];
										echo '">';
										echo $_GET ["id"];
										echo '</option>';
									     
									?>
								</select> 
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

			<!-- Le type d'encodage des données, enctype, DOIT être spécifié comme ce qui suit -->
<form enctype="multipart/form-data" action="../controlleur/test.php?id=<?php  echo $_GET ["id"];?>" method="post">
  <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->

 <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->

  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez un fichier png : <input name="file" type="file" /> </br>
  Envoyez un fichier pdf : <input name="file2" type="file" /> </br>
  <input type="submit" value="Envoyer les fichier" />
</form>

		
		
	</div>
	
</body>
</html>