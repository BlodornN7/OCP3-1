<?php session_start(); ?>

<?php if ($_SESSION['logged_in'] !== true) {
	header ('location: Connexionpage.php');
	exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php include_once('header.php'); ?>

<main>
	
<div class="h1">

    <p>Présentation lroem ipsum dksjfdlfskfhjdsklfhsjfdklshjdskfshdjk</p>
    <div id="illustrationbox">
    <img id="illustration" src="images/logo.png">
    </div>
    

</div>


<div> 

	<h2>Texte acteurs & partenaires</h2>
	<p>Présentation lorem ipsum dksjfdlfskfhjdsklfhsjfdklshjdskfshdjk</p>

</div>


<section class="h3link">

	<div class="mainborder">

		<div class="frame">
			 <img class="image" src="images/formation_co.png">
			 <h3> Formation&co</h3>
			 <p> Formation&co est une association française présente sur tout le territoire. 

                Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé. </p>
			 <div class="border">
			 <button class="readmore"><a href="Formationandco.php">lire la suite</a></button>
			</div>
	 </div>
	 	
	  	 
	  <div class="frame">
	  	<div class="flexframe">
			 <img class="image" src="images/protectpeople.png">
			 <div class="h3pflex">
			 <h3> Protectpeople</h3>
			 <p> Protectpeople finance la solidarité nationale. 

                 Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale. </p>
			</div>
	 		 <div class="border">
			 <button class="readmore"><a href="protectpeople.php">lire la suite</a></button>
			</div>
		</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/Dsa_france.png">
			 <h3> DSA France</h3>
			 <p> Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. 

                 Nous accompagnons les entreprises dans les étapes clés de leur évolution.   </p>
	 		 <div class="border">
			 <button class="readmore"><a href="DsaFrance.php">lire la suite</a></button>
			</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/CDE.png">
			 <h3> Chambre des entrepreneurs</h3>
			 <p> La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.  </p>
	 		 <div class="border">
			 <button class="readmore"><a href="CDE.php">lire la suite</a></button>
			</div>
	 	</div>
	  
	</div>

</section>
	



</main>
<?php include_once('footer.php'); ?>
</body>
</html> "

