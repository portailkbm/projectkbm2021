<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-evenement.css?<?php echo time(); ?>" />
           
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<title>KBM-Produit</title>
	</head>
    <body>
        <div>
            <h1>Listes des produits</h1>
            <div>
                <a href="main.php"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
            </div>
        </div>
        <br>

                <table class="table">
					<thead>
						<tr>
							<th  scope="col">Nom scientifique</th>
							<th  scope="col">Nom local</th>
							<th  scope="col">Type</th>
							<th  scope="col">Exploitant</th>
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
    </body>
</html>