<?php session_start(); ?>
<html>
  <head>
    <title>Page d'information du compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="connexion.css">
  </head>
  <body>

<?php include_once('header.php'); ?>

<h1> Voici un récapitulatif de vos informations : </h1>

<p> Nom complet :<?php echo $_SESSION['full_name']; ?> </p><br>
<?php echo $_SESSION['full_name']; ?>

<p> Nom d'utilisateur :</p><br>
<?php echo $_SESSION['username']; ?>

<p> Mot de passe :</p><br>
<?php echo $_SESSION['password']; ?>

<p>Question secrète :</p><br>
<?php echo $_SESSION['secret_question']; ?>

<p> Réponse secrète</p><br>
<?php echo $_SESSION['secret_answer']; ?>
<p><a href="AccountModification.php">Modifier mes informations</a></p>

<?php include_once('footer.php'); ?>
</body>
</html>