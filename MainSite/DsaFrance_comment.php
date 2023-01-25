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
	<h1> <img id="logoacteur" src="images/Dsa_france.png">    </h1>
	</div>



	
<h2> Notre vocation est de vous protéger.</h2>


FoDsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.<br> 

Nous accompagnons les entreprises dans les étapes clés de leur évolution.<br> 

Notre philosophie : s’adapter à chaque entreprise.<br> 

Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises 
</section>

<section id="commentaire">

	<h3> Commentaires </h3>

	<form id="commentform" action="submit_comment_dsafrance.php" method="POST">
      <label for="Comment">Commentaire</label><br>
      <textarea id="Comment" name="Comment" rows="5" cols="80"></textarea><br>
      <input type="submit" value="Publier mon commentaire"><br> </form>
	<button id="LikeDislike">Likedislike</button><br>
	
	<?php include_once("Getcomment_DsaFrance.php"); ?>
	<?php foreach ($comment as $comments) { ?>
		<div class="CommentSection">
	<p> Auteur : <?php echo $comments['username']; ?> </p>
	<p> Commentaire : <?php echo $comments['comment']; ?> </p>
	</div>
	<?php } ?>

	<button id="LikeDislike">Likedislike</button>
	








</section>

<?php include_once('footer.php'); ?>