<head>
	

	<link rel="stylesheet" type="text/css" href="style.css">
</head>



<?php include_once('headeralt.php'); ?>
<section id="Connexionsection">
<h1 style="text-align: center;">Mot de passe oublié</h1>

<form action="Passwordreset.php" method="POST">
	<label for="username">Nom d'utilisateur:</label><br>
	<input type="text" id="username" name="username"><br>
	<label for="SecretAnswer">Réponse à la question secrète:</label><br>
	<input type="text" id="SecretAnswer" name="SecretAnswer"><br>
	<input type="submit" value="Modifier le mot de passe"></form>

</section>








<?php include_once('footer.php'); ?>