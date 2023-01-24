<?php session_start();


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

<?php echo 'Votre login est '.$_SESSION['secret_question'].' et votre mot de passe est '.$_SESSION['secret_answer'].'.'; ?>

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
			 <img class="image" src="images/CDE.png">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien</p>
			 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
	 </div>
	 	
	  	 
	  <div class="frame">
	  	<div class="flexframe">
			 <img class="image" src="images/CDE.png">
			 <div class="h3pflex">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien</p>
			</div>
	 		 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
		</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/CDE.png">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien contenu textuel + lien  </p>
	 		 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/CDE.png">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien</p>
	 		 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/CDE.png">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien</p>
	 		 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
	 	</div>
	  <div class="frame">
			 <img class="image" src="images/CDE.png">
			 <h3> Titre n°1</h3>
			 <p> contenu textuel + lien</p>
	 		 <div class="border">
			 <button class="readmore"> lire la suite</button>
			</div>
	 	</div>
	</div>

</section>
	



</main>
<?php include_once('footer.php'); ?>
</body>
</html>