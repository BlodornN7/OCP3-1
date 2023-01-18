<?php 
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

$username = $_POST['username'];
$password = $_POST['password'];

//$CheckUsernameSQL = $db->prepare('SELECT * FROM users WHERE username = :username');
//$CheckUsernameSQL->bindParam(':username', $username);
//$CheckUsernameSQL->execute();
//$user1 = $CheckUsernameSQL->fetch();

//$CheckPassWordSQL = $db->prepare('SELECT * FROM users WHERE password = :password');
//$CheckPassWordSQL->bindParam(':password', $password);
//$CheckPassWordSQL->execute();
//$user2 = $CheckPassWordSQL->fetch();

$CheckUsernameAndPassWordSQL = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$CheckUsernameAndPassWordSQL->bindParam(':username', $username);
$CheckUsernameAndPassWordSQL->bindParam(':password', $password);
$CheckUsernameAndPassWordSQL->execute();
$user3 = $CheckUsernameAndPassWordSQL->fetch();

if ($user3["username"] === $username && $user3["password"] === $password) {
        include_once('Accueil.php');
        
}


else { include_once('Connexionpagefail.php'); } ?> 
        


        