<?php session_start(); ?>
<html>
  <head>
    <title>Page de modification du compte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="connexion.css">
  </head>
  <body>
<?php include_once('header.php'); ?>

<h1> Modification de vos informations : </h1>

<form action="ValidateAccountModification.php" method="POST">
<label for="FullName">Nom complet :<?php echo $_SESSION['full_name']; ?></label><br>
      <input type="text" id="FullName" name="FullName"><br><br>
      <input type="submit" value="Modifier mon nom complet"><br> </form>

<form action="ValidateAccountModification.php" method="POST">
<label for="UserName">Nom d'utilisateur : <?php echo $_SESSION['username']; ?></label><br>
      <input type="text" id="UserName" name="UserName"><br><br>
      <input type="submit" value="Modifier mon nom d'utilisateur"><br> </form>
      
<form action="ValidateAccountModification.php" method="POST">      
<label for="Password">Mot de passe : <?php echo $_SESSION['password'];?></label><br>
      <input type="text" id="Password" name="Password"><br><br>
      <input type="submit" value="Modifier mon mot de passe"><br><br> </form>
            
<form action="ValidateAccountModification.php" method="POST">
<label for="SecretQuestion">Question secrète : <?php echo $_SESSION['secret_question']; ?></label><br>
      <input type="text" id="SecretQuestion" name="SecretQuestion"><br><br>
      <input type="submit" value="Modifier ma question secrète"><br><br> </form>

<form action="ValidateAccountModification.php" method="POST">
<label for="SecretAnswer">Réponse secrète : <?php echo $_SESSION['secret_answer']; ?></label><br>
      <input type="text" id="SecretAnswer" name="SecretAnswer"><br><br>
      <input type="submit" value="Modifier mon réponse secrète"><br> </form>


<?php include_once('footer.php'); ?>
</body>
</html>