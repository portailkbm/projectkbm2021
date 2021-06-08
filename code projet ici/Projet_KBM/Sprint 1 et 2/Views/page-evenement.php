>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-page-evenement.css?<?php echo time(); ?>" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert"> 
	<header>
		<a href="../Views/event.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Évenement</h1>
			<p>
				<?php
						include_once ( "../models/modelevenement.php" );
						Select_Flyer($_GET ["id"]);    
				?>
			</p>
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
			<div id="photoorganisateur">
				<img src="https://previews.123rf.com/images/salamatik/salamatik1801/salamatik180100019/92979836-
				ic%C3%B4ne-de-visage-anonyme-de-profil-personne-silhouette-grise-avatar-par-d%C3%A9faut
				-masculin-photo-placeholder-.jpg" alt=" L'image n'a pas charger" width="200" height="200">
			</div>

			<div id="aproposorganisateur">
				<div class="flexh1">
					<p>Organisateur</p>
				</div>

				<div class="flexh1">
					<p>Contact : 
					<?php
				    include_once ("../controlleur/controleurevenement.php");
					echo $_SESSION["resultat"]["libevent"];
				?></p>
				</div>

			</div>
			
		</div>
		<?php
			include_once ( "../models/modelevenement.php" );
			Select_Flyer_Evenement($_GET ["id"]);
		?>
	</div>
</body>
</html>