<?php session_start(); ?>

<?php if ($_SESSION['logged_in'] !== true) {
	header ('location: Connexionpage.php');
	exit;
}
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleacteur.css">
</head>

<body>
	<?php include_once('header.php'); ?>


<section id="sectionacteur1">
	<div class="logoacteurdiv" >
	<h1> <img id="logoacteur" src="images/formation_co.png">    </h1>
	</div>



	
<h2> Notre vocation est de vous protéger.</h2>


Formation&co est une association française présente sur tout le territoire.<br>

Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.<br>

Notre proposition :<br>  
<ul>
<li>un financement jusqu’à 30 000€ ; </li> 

<li>un suivi personnalisé et gratuit ; </li> 

<li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li><br>

 

Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . Nous collaborons avec des personnes talentueuses et motivées.<br>

Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous. 
</section>

<section id="commentaire">

	<h3> Commentaires </h3>

	<button id="Newcomment">Nouveau commentaire</button>

	<button id="LikeDislike">Likedislike</button>
	








</section>

<?php include_once('footer.php'); ?>























</body>