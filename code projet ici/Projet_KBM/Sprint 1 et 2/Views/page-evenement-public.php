<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description evenement</title>
</head>
<body>
    	
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

				<p>
				<img id="logo-retour" src="
				<?php
				    include_once ( "../models/modelevenement.php" );
					Select_Flyer($_GET ["id"]); 
				?>" alt="retour" />
				</p>
			</div >
				<div id="statue">
					<div>
					<img src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331257__340.png" alt="image"  width="90px" height="120px">
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

						<div >
							<button onclick="window.location.href='../controlleur/controleur_deconnexion.php';">Deconnexion</button>
						</div>
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
</body>
</html>