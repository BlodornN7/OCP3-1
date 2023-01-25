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
	<h1> <img id="logoacteur" src="images/protectpeople.png">    </h1>
	</div>



	
<h2> Notre vocation est de vous protéger.</h2>


<p> Protectpeople finance la solidarité nationale.<br>

Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.<br>

 

Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.<br>

Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.<br>

Nous garantissons un accès aux soins et une retraite.<br> 

Chaque année, nous collectons et répartissons 300 milliards d’euros.<br> 

Notre mission est double : 

<ul>

<li>sociale : nous garantissons la fiabilité des données sociales ;</li> 

<li>économique : nous apportons une contribution aux activités économiques.</li>  </p>
</ul>
</section>

<section id="commentaire">

	<h3> Commentaires </h3>

	
    <form id="commentform" action="submit_comment_protectpeople.php" method="POST">
      <label for="Comment">Commentaire</label><br>
      <textarea id="Comment" name="Comment" rows="5" cols="80"></textarea><br>
      <input type="submit" value="Publier mon commentaire"><br> </form>
	<button id="LikeDislike">Likedislike</button><br>
	
	<?php include_once("Getcomment_protectpeople.php"); ?>
	<?php foreach ($comment as $comments) { ?>
		<div class="CommentSection">
	<p> Auteur : <?php echo $comments['username']; ?> </p>
	<p> Commentaire : <?php echo $comments['comment']; ?> </p>
	</div>
	<?php } ?>
    
	







</section>

<?php include_once('footer.php'); ?>