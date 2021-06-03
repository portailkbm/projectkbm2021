<!DOCTYPE html>
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
		</div>

	</header>

	<div id="conteneurprincipale">
		<div id="conteneurphoto">

			<div class="flexb1"></div>
			<div class="imgconteneur">
				<p>emplacement image</p>
			</div>
			<div class="flexb1"></div>
		</div>

		<div id="conteneurtexte">		
			<div class="flexb1"></div>
			<div class="conteneurtextepresentation">
				<p>Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillé pour en faire un livre spécimen de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut dans la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de PAO comme Aldus PageMaker comprenant des versions de Lorem Ipsum.</p>
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
					<p>Contact</p>
				</div>

			</div>

		</div>

	</div>
			

	</div>
</body>
</html>