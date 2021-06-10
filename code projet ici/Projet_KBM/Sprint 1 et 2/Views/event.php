<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-evenement.css" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert">
	<header>
		<a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Nos Évenements</h1>
			<br>
			<div class="champc orange" id="infos">
				Voir Plus
			</div>
		</div>
	</header>
	<br>
	<!-- C'est le code coter html a adapter qui envoie le tri dans le terminale-->
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
					<a href="event_passe.php" class="champc rouge event">Évenements Passés</a>
				</div>
				<div>
					<a href="event_futur.php" class="champc vert event">Évenements à Venir</a>
				</div>
					
						<div>
							<button class="champc bleu event"  type="date" id="date" name="date" value="">trie par date</button>
						</div>
						
						
						<div>
							<button class="champc rouge event" type="ville" id="ville" name="ville" value=" cp">trie par Ville</button>
							
                    
							<select class="element champselect" name="cp" id="cp" placeholder="Votre Code Postal" required pattern=".*\S.*">
                        <option value="">--Votre Code Postal--</option>
                        <?php
		                    include_once ( "../models/modelevenement.php" );
		                    Select_Code_Postal_all();    
                        ?>
                    </select> 
						</div>
   					
		</div>
	</div>
</body>
	<footer>
			<a id="contact" href=""> Contacter nous </a>
			<a id="contact" href="page-pas-evenement.html"> Oups y'a rien</a>
	</footer>
</html>
message.txt
3 Ko