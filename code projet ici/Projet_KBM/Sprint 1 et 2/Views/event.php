<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-evenement.css?<?php echo time(); ?>" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert">
	<header>
		<a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<h1 id="titre">Nos Évenements</h1>
		<div id="wrapper">
			<div  id="infos">
			</div>
				<div id="statue">
					<div>
						<img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png"  width="80" height="80">

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
						<p>adrresse@mail</p>
						<div >
							<button onclick="window.location.href='../controlleur/controleur_deconnexion.php';">Deconnexion</button>
						</div>
					</div>
				</div>
		</div>
	</header>
	
	<!-- C'est le code coter html a adapter qui envoie le tri dans le terminale
	<div>
		<form  action="" method="POST" >
			<select name="trier" id="trier">
			Tri par : 
				<option value="debutevent">Date</option>
				<option value="typeevent">Type</option>
			</select>
			<input type ="submit" name="recherche">
		</form>
		<br>
		<p>test</p>
	
		<form  action="" method="POST" >
			visualiser : 
				
			<input type ="submit" name="visualiser">
		</form>
	</div>
-->
	<!-- NE pas oublier de changer les host ds modelevenment et controleurevenement-->
	<br>
	<div id="centrale">
		<div id="moitieG">
			<table>
				<thead>
					<tr>
						<th>Dates</th>
						<th>Activités</th>
						<th>Lieux</th>
					</tr>
				</thead>
			    <tbody>
					<!-- Controller -->
					<?php			
						//modification des information
						if (isset($_POST['recherche']))
						{
							include_once ("../models/modelevenement.php");
							filter($_POST['trier']);
						}
						elseif (isset($_POST['visualiser']))
						{
							include_once ("../models/modelevenement.php");
							visualiser();
						}
						else
						{
							include_once ("../models/modelevenement.php");
							visualiser();
						}
					?>
				</tbody>
        	 </table>
		</div>
		<div id="moitieD">
				<div>
					<a href="event_passe.php" class="champc rouge event">Évenements Passés </a>
				</div>
				<div>
					<a href="event_futur.php" class="champc vert event">Évenements à Venir</a>
				</div>
					<form id="formulaire" method="post">
						<div>
					        <label for="date">À partir de :</label>
							<input type="date" id="date" name="date" value="" min="2000-01-01" max="2023-12-31">
						</div>
						<br>
						<div>
					      	<label for="ville">Dans cette Ville :</label>
							<input type="text" name="ville" id="ville" placeholder="Entrer un nom de Ville" />
						</div>
						<br>
					    <div class="champc bleu event">
					        Rechercher
					    </div>
   					 </form>
		</div>
	</div>
</body>
	<footer>
			<a id="contact" href=""> Contacter nous </a>
			<a id="contact" href="page-pas-evenement.html"> Oups y'a rien</a>
	</footer>
</html>
