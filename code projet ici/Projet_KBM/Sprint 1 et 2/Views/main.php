
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		<link rel="stylesheet" href="../css/style-main.css?v=<?php echo time() ?>" />
		<title>KBM - Acceuile</title>
	</head>
	<body class="vert">
	<div id="header">
		<div class="tu"></div>
		<div id="cent">
			<div id="contnav">
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">KBM</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Demenjala</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Lakou</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="event.php">Evenements</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Connaissance</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Bokantag</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Produits</a></div>
				<div class="separenavjaune"></div>
				<div class="elemenrnav"><a href="">Producteur</a></div>
			</div>
		</div>
		<div class="tu"></div>
	</div>


	<div id="principale">
		<!--cote gauche du site -->
		<div id="pgauche">

			<div id="conteneurtitre">
				<div id="titre">
				<p>Nou Kantan vwè'w</p>
				</div>	
			</div>

			<div id="conteneurslide">

				<!-- Conteneur principal de tout le diaporama -->
				<div class="diapo">
					<!-- Conteneur des "diapos" -->
					<div class="elements">
						<!-- Première diapo -->
						<div class="element active">
							<img src="../Ressources/imagetest.png" alt="Image 1">
						</div>
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

		<!--cote droit du site -->
		<div id="pdroite">
			<div id="elementco">
				<div><a href="connexion.php" class="champc beige">Contact </a></div>
				<div><a href="inscription.php" class="champc bleu">Inscription </a></div>
				<div><a href="connexion.php" class="champc rouge">Connexion </a></div>
			</div>
			<div>
			<h2 style="text-align: center;">Evenement</h2>
			<div class="celules">
				<table>
					<thead>
						<tr>
							<th id="activités">Activités</th>
							<th id="lieux">Lieux</th>
							<th id="dates">Dates</th>
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

			

		</div>
	</div>
		<!--
		<header>
				<div class="wrapper">
					<h1 id="titre">Bienvenue sur KBM</h1>
					<h2> NOU CONTENT VWE ZOT <h2><br/>
					<nav>
						<ul>
							<li><a href="">KBM</a></li>
							<li><a href=""> Produit</a></li>
							<li><a href=""> Producteur</a> </li>
							<li><a href="">Lakou</a></li>
							<li><a href="event.php">Evenements</a></li>
							<li><a href="">Demenjala</a></li>
					</nav>
					<a href="inscription.php" class="champc bleu">Inscription </a>
					<a href="connexion.php" class="champc rouge">Connexion </a>
				</div>
		</header>
		<br>
		<section id="slideshow">
	 		<div id="slider">
   				<input type="radio" id="show_slide1" name="slider_commands">
   				<input type="radio" id="show_slide2" name="slider_commands">
    			<input type="radio" id="show_slide3" name="slider_commands">
    			<input type="radio" id="play_slider" name="slider_commands">
  			<div id="slides">
        		<figure id="slide1">
          			<img src="../Ressources/image1.png" alt="Une première image">
          			<figcaption></figcaption>
       			</figure>
      		  	<figure id="slide2">
         		 	<img src="../Ressources/image2.png" alt="Une deuxième image">
        			<figcaption></figcaption>
        		</figure>
        		<figure id="slide3">
            		<img src="../Ressources/image3.png" alt="Une troisième image">
            		<figcaption></figcaption>
        		</figure>
   			</div>
   				<nav>
      				<ul class="dots_commands">
            			<li><label for="show_slide1">Slide 1</label></li>
           				 <li><label for="show_slide2">Slide 2</label></li>
          				  <li><label for="show_slide3">Slide 3</label></li>
       				</ul>
       				<label for="play_slider" aria-label="Play" id="play" title="Play">Play</label>
   				 </nav>
			</div>
		</section>
		<section id="Tableau">
			<h2 style="text-align: center;">Evenement</h2>
			<div class="celules">
				<table>
					<thead>
						<tr>
							<th id="Organisateur">Organisateur</th>
							<th id="activités">Activités</th>
							<th id="lieux">Lieux</th>
							<th id="dates">Dates</th>
						</tr>
					</thead>
					<tbody id="pointsTable" aligne="center">
						<marquee behavior="scroll" direction="down">
						<?php
							include_once ("../models/modelevenement.php");
							visualiser();
						?>	
						</marquee>
						
					</tbody>
				</table> 
			</div>
		</section>
		<script src="../js/main.js"></script>
-->
<script src="../js/main.js"></script>
	</body>

</html>