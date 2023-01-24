<header> <!-- Haut de page contenant le logo ainsi que le nom et prénom de l'utilisateur connecté -->
    

<nav id="navbox">
		 <?php echo '<p><a href="Accountinfo.php">' .$_SESSION['full_name'].'</a></p>'; ?>
		 <p> <a href="disconnect.php"> Se déconnecter </a> </p>
	</nav>

	<a id="mainlogo" href="Accueil.php"><img src="images/logo.png" alt="Logo de l'entreprise"></a>
	
	
</header>
