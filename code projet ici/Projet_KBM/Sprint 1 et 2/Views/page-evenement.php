
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-page-evenement.css?<?php echo time(); ?>" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert"> 
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
			</div >
				<div id="statue">
					<div>
					<img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png" alt="image"  width="110px" height="130px">
					</div>
					<div>
					<p>Pseudo</p>
					<p>adresse@mail</p>
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
	</div>
</body>
</html>