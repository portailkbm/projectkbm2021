
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	   	<link rel="stylesheet" href="../css/style-page-evenement.css" />
		<title>KBM-Evenement</title>
	</head>
<body class="vert">
	<header>
		<a href="../evenement.html"> <img id="logo-retour" src="../Ressources/logo_retour.png" /> </a>
		<div id="wrapper">
			<h1 id="titre">Évenement</h1>
		</div>

	</header>

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

		<br>
		<br>

		<div class="emplacement">
			<p>Se tiendra du :</p>
		</div>

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
		</div>



		<div id="ImageEmplacement2">

			<div>
				<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDREREBAPEA8PEA8PFQ4QEA8QERAPFhEXFxUTFRMYHSggGBolGxUVITEhJSorOjIwFx8zRDMsNygtLjcBCgoKDQ0NDw0NDysZFRkrLSsrKy03NysrKysrNysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOkA2AMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAABgECBAUHA//EADYQAAICAQAIBAUDAwQDAAAAAAABAgMRBAUGEhMhMVEiQXGRI1JhgdEyQuFyobEUU5Lx
			FiTB/8QAFgEBAQEAAAAAAAAAAAAAAAAAAAEC/8QAFhEBAQEAAAAAAAAAAAAAAAAAABEB/9oADAMBAAIRAxEAPwCSAA0gAAAAAAAAA
			AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA2urdR26Rhv4cPmkub9Iki0PZ+irrHiPvPn/boQQlLP
			Tn6Js9P9PZ/t2f8ACX4OjV1xisRSiuySSLhVczkmuuV6rBQ6VOtSWJJSXZpNGt0vUFFvSO4+8OX9ugog4NtrLUNtCcl8SHzRXNL6xNSEAAUAAAAAAAAAAAAA
			AAAAAAAAFSU6i1CopWXLMuqrfSP1l3Zj7L6rUnxprkn4IvzfnIlRNUSKgEAAAAAAZHde6gU07KVifV1rpL6peTJEAOZtf9FCSbUar3Xx4Lk+U0vJ+UiNlQABQAA
			AAAAAAAAAAAAAAPbRNHd1ka11nJLPZeb9jxN9sjRvXSn8keXrL+EyCV01RhCMYrEYpJL6I9ACKAAAAAAAAAACy2tTi4yWYyTTX0ZzzTNGdNs631hJrPdeT9sHRiJb
			X0btsJr98Wn6x/hlwR8AFQAAAAAAAAAAAAAAAAJXsbH4dr7zS9o/yRQlexsvhWrtYn7xX4JokQAIoAAAAAAAAAABHtso/BrfazHvF/gkJH9spfBrXezPtCX5AiQANI
			AAAAAAAAAAAAAAAAEg2PvxbOHzxTXrF/hkfMjQdJdNsLF+15a7rzXsQdFBbXNSipJ5Ukmn3TLiKAAAAAAAAAAARPbG/NlcPli5P1b/AIJVOaim28JJtvsl1Oe6w0p33
			Ts+Z8l2j5L2LgxgAVAAAAAAAAAAAAAAAAAqUAEn2W1ny4E3z/Y3594+pJjmcW08p4a5pryZL9Ra8VyVdjxauSl5T/DIregAgAAAAAABpNea8VKddbTt6N9VX6939AMXan
			WeFwIPm/1teS8okYKyk2228tvLb6tlpUAAUAAAAAAAAAAAAAAAAAC6MW2kk228JLm2/oBaZugaru0h+CPh/wByXKK+/n9jeao2cSxO/m+qq8l/V39CRRiksJYS8kSjG1b
			o06q1Gdjsa82ui7Z6v7mWARQAAAABi6x0edtbjCx1N/uSzldvoQrWGq7tH/XHMfnjzi/v5fcn5SUU1h80/IDmYJVrfZxSzOjwy6uv9r9OxF5xcW00008NNYaf1Ki0AFAA
			AAAAAAAAAAAAAKgXVVuclGKblJ4SXmyaak1NHR470sStfWXlH6R/J57O6p4EeJNfFkuj/ZF+Xr3N0SqpgqAQAAAAAAAAAAANTrrU8dJjmOI2rpLyl9JG2AHNbapQk4yTU
			ovDT8mWEz2h1Sr4b8F8WC/5r5fXsQ0qKAAoAAAAAAAAAAAb7ZfVvEnxZLwQfhT/AHT7+iNNo1DtnGEf1TaivydC0TR401xhHpFY9e7Jo9SoBFAAAAAAAAAAAAAAAACI7U6
			t4cuNBeGbxJdp9/uS48tKojbXKEuklj+QObg9dK0eVVkoS6wbXr2f36nkaQAAAAAAAAAAEk2Q0PMpXNfp8EfX9z/wSkw9U6NwdHrh5qOX/U+b/uzMMqAAAAAAAAAAAAAAAA
			AAAAAIvtfoeHG5Lr4Jev7X/kjR0LWmjcaicO8eX9S5r+6OfMuCgAKgAAAAAGZqiji6TXHyck36R5v/AAYZvtkKs3zl8kMfeT/CZBLwARQAAAAAAAAAAAAAAAAAAAAAIBrqjh
			aTZHy3t5ekln/6T8iO2FOLoT+aGPvF/hlwaAAFQAADIydK4Uflj7IcKPyx9kSq5rklWxsPBbLvKMfZfySDhR+WPsisYJdEl6LAouAKOWCCoMfRdMha7FHPwrJVSzy8SSbx9
			PEimk6fVTniTjHFdlrznlXDG/L7ZQGSCyNiaymuaz9iy/SYVwlOclGEIynKXkopZbA9gWqafRrms/Y8YaZCVsqk/HCELH23ZOSWH38LAyAWuXp7jfXde4FwKJmNbrCqF0a
			ZWRVs4ysjXnxOEesseS+rAygalbSaI4b6tbWUklXc5yzFyUowUd6UXFN7yWMJvOEer13o+9Jb8moQ4srFXa6Yw3FPLuUdzO608ZzzQGxBro670d1qziKMJWxoW/GcJcaUlGNbhJKUZZa5Neeeha9f6Mt/4j+G0mlXa3J7+58NKPxfF4fBnnyA2YMFa40d8H4sf/ZclVnKc3GMpSWPLCjLOcYwy7V2s6dKUnVPe3GspxnBrKzF4kk3FrmpdH5MDMI7tlD4dcu02vdfwSItlBPqk/XmBzTIydK4Uflj7IcKPyx9kWjmuQdK4Uflj7ICi8AEAAADVbR6vlpWj7kY1ykpRlFWycYKS6SeIy3sdd1rn9OptS0CKaZsrOcrJxdCtsnfJ2YlFzjKqtQjLC6b9aeOePqeek7K2X8WVkdEc769Pg5eKfC46huODcMy3XF/L+rP0JgEBELNlrJznLdog50uK3LrVGiTpdfDjBQSlDLby8df0t8z103Zbf40K69Grrt0OejZacm5uGI+Dc8EVLMsp8+2eZKSqAh+lbLXWuaT0ejfzJXVubsqXAVf+mit2Oas+LOV1/SnzMmnZ+1aRXeo6NVw+Ev9LXKboaTs3n+heJb6lF46rHnkk4QEb1nqK7SLLpYoTvoVfElKcrNHkoSThX4VvQk3zeYvr1ysYb2SnZJynHRoJxt3aYb0q6JTsoeK3urk1VPLwuc+hL3+QgNXq7VCqpdUniK0my+EapTgoQd7shDljkspOPTquh5661fdpFte7GrhblsLLHbOFqVkJQe7FVtPCllZkufbqbkfwBFZbN32resnXC5V6Po8LKJ2R3Kq1ZGdi5LxSVsvA8pYXN4MiWprqrnPRoaPXGFbjFSuuavapjXCN1e7iKjup5WW91LlzJEAIp/43fbBSnbwb1OMmq5wvrnLiwnO5udKasajupJYSjFdy/Sdl2+JKDi/iQddE7LVWqVarJw30m63KeHmKeN2KJQGBFdC2Yuq4E1pGZ1TUnTivgxrUbUqoScHPHxEnJ83zfXCNpqDRb6+LLSYUq2xxbnTbOxSwsKO7KuO5GKwkufVvO
			TbBAVAAAAAAAB//9k=" alt="L'image n'a pas charger" width="200" height="200"/>

			</div>
			
			<div class="emplacement3">
				<p>Organisateur :</p>
				
				<p>conctact : 
				<?php
				    include_once ("../controlleur/controleurevenement.php");
					echo $_SESSION["resultat"]["libevent"];
				?></p>
			</div>
	

		</div>

        <img src="
        <?php
		   include_once ("../controlleur/controleurevenement.php");
		   Select_Image($_GET["id"]); 
			//echo '<img src="'.$_SESSION["resultat"]["fllyer"].'" alt="" width="600" height="600">';
			
		    /* foreach($_SESSION["resultat"] AS $e )
			 {
				 echo "<img"

			 }*/
		?>
		"alt="" width="600" height="600">
		<!--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbCCFS0waFrAvxjY8sO5Q1_PGxhPVI9EyNeQ&usqp=CAU" alt="" width="600" height="600">
         -->

	</div>
</body>
</html>