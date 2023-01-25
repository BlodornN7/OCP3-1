<?php session_start(); ?>

<?php if ($_SESSION['logged_in'] !== true) {
	header ('location: Connexionpage.php');
	exit;
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleacteur.css">
</head>

<body>
	<?php include_once('header.php'); ?>


<section id="sectionacteur1">
	<div class="logoacteurdiv" >
	<h1> <img id="logoacteur" src="images/CDE.png">    </h1>
	</div>



	
<h2> Notre vocation est de vous protéger.</h2>


<p> Protectpeople finance la solidarité nationale.<br><br>

La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation.<br><br>

Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.<br></p>
</section>

<section id="commentaire">

	<h3> Commentaires </h3>

	<button id="Newcomment"><a href="CDE_comment.php">Nouveau commentaire</a></button>
    
    <?php include_once("Getcomment_CDE.php"); ?>
	<?php foreach ($comment as $comments) { ?>
		<div class="CommentSection">
	<p> Auteur : <?php echo $comments['username']; ?> </p>
	<p> Commentaire : <?php echo $comments['comment']; ?> </p>
	</div>
	<?php } ?>

	<button id="LikeDislike">Likedislike</button>
	








</section>

<?php include_once('footer.php'); ?>























</body>