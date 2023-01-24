<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php include_once('headeralt.php'); ?>

<section id="Connexionsection">
<h1>Modification du mot de passe</h1>

<form action="PasswordModification.php" method="POST">
	<label for="username">Nom d'utilisateur:</label><br>
	<input type="text" id="username" name="username"><br>
    <label for="NewPassword">Nouveau mot de passe</label><br>
    <input type="text" id="NewPassword" name="NewPassword"><br><br>
    <input type="submit" value="Modifier le mot de passe"> </form>
</section>
<?php include_once('footer.php') ?>