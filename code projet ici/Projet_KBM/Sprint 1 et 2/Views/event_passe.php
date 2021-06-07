<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-evenement.css" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert">
	<header>
		<a href="event.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Nos Évenements Passés</h1>

			<br>

			<div class="champc orange" id="infos">
				Voir Plus
			</div>
		</div>

	</header>

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
						include_once ("../models/modelevenement.php");
						filter_date_passe();
					?>
				</tbody>
			</table>
		</div>


		<div id="moitieD">

				<div>
					<a href="event_passe.php" class="champc rouge event">Évenements Passés</a>
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
						<br>

						<div>
					      	<label for="ville">Dans cette Ville :</label>
							<input type="text" name="ville" id="ville" placeholder="Entrer un nom de Ville" />
						</div>

						<br>
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