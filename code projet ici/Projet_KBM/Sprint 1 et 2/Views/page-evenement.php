
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

<<<<<<< HEAD
	<br>

	<div id="centrale">
       <?php
	       include_once ("../models/modelevenement.php");
		   echo '<p>';
		   Select_Flyer($_GET["id"]);
		   echo '</p>';
	   ?>


		<!--<img src="../Ressources/image1.png" alt=""> -->

		

		
<!--
		<div class="emplacement">
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in ante fermentum
				, cursus arcu a, commodo magna. Proin mi elit, porta quis luctus sit amet, elementum ac metus. 
				Aliquam accumsan mauris quis ante laoreet, a lacinia odio cursus. Aliquam fermentum, ipsum eu maximus lacinia, diam
				 leo congue odio, in bibendum sem tortor nec leo. Ut dignissim massa rutrum enim lacinia 
				 feugiat. Quisque ac ante fermentum, tristique urna a, ultricies elit. In sit amet ipsum vel neque 
				 rutrum ultricies.</p>


		</div> -->
=======
	<div id="conteneurprincipale">
		<div id="conteneurphoto">

			<div class="flexb1"></div>
			<div class="imgconteneur">
				<p>emplacement image</p>
			</div>
			<div class="flexb1"></div>
		</div>
>>>>>>> master

		<div id="conteneurtexte">		
			<div class="flexb1"></div>
			<div class="conteneurtextepresentation">
				<p>Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de la composition. Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillé pour en faire un livre spécimen de caractères. Il a survécu non seulement à cinq siècles, mais aussi au saut dans la composition électronique, restant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de PAO comme Aldus PageMaker comprenant des versions de Lorem Ipsum.</p>
			</div>
			<div class="flexb1"></div>
		</div>

<<<<<<< HEAD
		<div class="emplacement">
			<form  action="" method="POST" >
			   <P> 
				<?php
				    include_once ("../models/modelevenement.php");
				    Select_Debut_evenement($_GET["id"]);    
				    echo 'AU ';
					Select_Fin_evenement($_GET["id"]); 
				    echo '<p> LE LIEU EST :  ';
					Select_code_postal($_GET["id"]); 
				?>
			   </P>
=======
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
>>>>>>> master
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
<<<<<<< HEAD
			
			<div class="emplacement3">
				<p>Organisateur :</p>
				
				<p>conctact : 
				<?php
				    include_once ("../controlleur/controleurevenement.php");
					echo $_SESSION["resultat"]["libevent"];
				?></p>
			</div>
	

		</div>

        <!--<img src="-->
        <?php
		   include_once ("../controlleur/controleurevenement.php");
		   Select_Image($_GET["id"]);
		   //Select_Image_Evenement($_GET["id"]); 
			//echo '<img src="'.$_SESSION["resultat"]["fllyer"].'" alt="" width="600" height="600">';
			
		    /* foreach($_SESSION["resultat"] AS $e )
			 {
				 echo "<img"

			 }*/
		?>
		<!--"alt="" width="600" height="600"> -->
		<!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbCCFS0waFrAvxjY8sO5Q1_PGxhPVI9EyNeQ&usqp=CAU" alt="" width="600" height="600">
         -->
=======

		</div>

	</div>
			
>>>>>>> master

	</div>
</body>
</html>