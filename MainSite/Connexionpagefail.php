<!DOCTYPE html>

<html>
  <head>
    <title>Page de connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="connexion.css">
  </head>
  <body>

       <?php include_once('header.php'); ?>

<section>
 <div id="Connexionsection">    
	<h1>Page de connexion</h1>
    <form action="login.php" method="POST">
      <label for="username">Nom d'utilisateur:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Mot de passe:</label><br>
      <input type="text" id="password" name="password"><br><br>
      <input type="submit" value="Se connecter"> </form><br>
      <button><a href="ForgottenPassword.php">Mot de passe oublié</a></button>
      <p style="color: red;">Identifiants incorrects</p>
      
      
    </form>
    </div> 
</section>


   <?php include_once('footer.php'); ?>
  </body>
</html>
