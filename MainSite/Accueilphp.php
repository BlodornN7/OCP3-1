<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	
<?php
	$UserName = "Lazarecki Jimmy";
	$isconnected = false
	?>
	
	

</head>

<body>

<header> <!-- Haut de page contenant le logo ainsi que le nom et prénom de l'utilisateur connecté -->
	<nav id="navbox">

	<div id="logo">
	<img src="images/logo.png" alt="Logo de l'entreprise">
	</div>
	     <?php if ($isconnected == true): ?>
	     	<p><a href=""> <? echo $UserName; ?> </a></p>
	     <? elseif ($isconnected == false): ?>
	     	<p><a href=""> <? echo 'Invité'; ?></a></p>
	     <? endif; ?>
		 
	</nav>
</header>

<main>
	
<div class="h1">

	<h1>Texte présentation du GBAF et du site</h1>
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
<footer id="footer">
	<p id="mentionslégales"> Mentions légales</p>
	<p id="Contact">Contact</p>
	
</footer>
</body> "};
</html> 