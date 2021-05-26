<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="css/style-evenement.css" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert">
	<header>
		<a href="main.php"> <img id="logo-retour" src="Ressources/logo_retour.png" /> </a>
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
		<form  action="controleurevenement.php" method="POST" >
			<select name="trier">
			Tri par : 
				<option value="debutevent">Date</option>
				<option value="typeevent">Type</option>
				<option value="idlak">lakout</option>
			</select>
			<input type ="submit" name="recherche">
		</form>
		<br>
		<p>test</p>
	
		<form  action="controleurevenement.php" method="POST" >
			visualiser : 
				
			<input type ="submit" name="visualiser">
		</form>
	</div>
	<!-- NE pas oublier de changer les host ds modelevenment et controleurevenement-->
	<br>
    <?php
		try
		{
			// $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
			$useur = 'root';
			$pass = '';
			include_once("Bdd_login.php");
			$bdd = new PDO('mysql:host=localhost;dbname='.constant("BD_NAME").';charset=utf8', $useur , $pass);
			}
			catch (Exception $e)
			{
			die('Erreur : ' . $e->getMessage());
			}

                
            //$requete = $bdd->query('SELECT * FROM evenement WHERE visevent = 1');
			$requete = $bdd->prepare('SELECT * FROM evenement WHERE visevent = 1');
			$requete ->execute();

          /* foreach($requete as $evenement) {
                
           echo $requete['debutevent']'</br>';
           echo $requete['libevent']'</br>';
           echo $requete['cp']'</br>';
                
           }
                
        //S $requete->closeCursor();   
        echo "<div id='centrale'><div id='moitieG'><table>";
        echo "<thead><tr><th>Dates</th><th>Activités</th><th>Lieux</th></tr></thead>";
        while($donnee = $requete->fetch()){ 


        }*/


 ?>
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

				<!--? foreach($requete as $evenement) {?-->
               <!--? while($row = $requete->fetch()) { ?-->
                <?php while($donnee = $requete->fetch()){ ?>
                <tr>
				<td>
					<?php echo $donnee["debutevent"] ?>
				</td>
				<td>
					<?php echo $donnee['libevent']; ?>
				</td>

				<td>
					<?php echo $donnee['cp']; ?>
				</td>
                </tr>


				<?   
                   $requete->closeCursor();   
                   } 
                ?>
				
			</table>
		</div>
		<div id="moitieD">
				<div>
					<a href="evenement-passe.html" class="champc rouge event">Évenements Passés</a>
				</div>
				<div>
					<a href="evenement-futur.html" class="champc vert event">Évenements à Venir</a>
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
