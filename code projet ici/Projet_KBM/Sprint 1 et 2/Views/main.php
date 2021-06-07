

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/style-main.css" />
		<title>KBM - Acceuile</title>
	</head>
	<body class="vert">
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
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Foot </td>
							<td id="lieux"> Gosier</td>
							<td id="dates"> 09-04-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Surf </td>
							<td id="lieux"> Saint-François</td>
							<td id="dates"> 14-04-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Marcher </td>
							<td id="lieux"> Pointe-à-Pitre</td>
							<td id="dates"> 20-04-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Gwo ka </td>
							<td id="lieux"> Abymes</td>
							<td id="dates"> 01-05-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Gwo ka </td>
							<td id="lieux"> Pointe-à-Pitre</td>
							<td id="dates"> 05-05-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Atelier Jeux traditionel </td>
							<td id="lieux"> Abymes</td>
							<td id="dates"> 24-05-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Foire  </td>
							<td id="lieux"> Gosier</td>
							<td id="dates"> 31-05-21</td>
						</tr>
						<tr>
							<td id="Organisateur"> ... </td>
							<td id="activités"> Tournoie de belote </td>
							<td id="lieux"> Saint-Anne</td>
							<td id="dates"> 01-06-21</td>
						</tr>
						</marquee>
					</tbody>
				</table> 
			</div>
		</section>
	</body>
	<footer>
		<a id="contact" href=""> Contacter nous </a>
	</footer>

</html>