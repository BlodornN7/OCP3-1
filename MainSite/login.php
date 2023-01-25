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

//$CheckUsernameSQL = $db->prepare('SELECT full_name FROM users WHERE username = :username');
//$CheckUsernameSQL->bindParam(':username', $username);
//$CheckUsernameSQL->execute();
//$user1 = $CheckUsernameSQL->fetch();

//$CheckPassWordSQL = $db->prepare('SELECT full_name FROM users WHERE username = :username');
//$CheckPassWordSQL->bindParam(':password', $password);
//$CheckPassWordSQL->execute();
//$user2 = $CheckPassWordSQL->fetch();

$CheckUsernameAndPassWordSQL = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$CheckUsernameAndPassWordSQL->bindParam(':username', $username);
$CheckUsernameAndPassWordSQL->bindParam(':password', $password);
$CheckUsernameAndPassWordSQL->execute();
$user3 = $CheckUsernameAndPassWordSQL->fetch();

if ($user3["username"] === $username && $user3["password"] === $password) {
    
    session_start ();
    $_SESSION['full_name'] = $user3['full_name'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['secret_question'] = $user3['secret_question'];
    $_SESSION['secret_answer'] = $user3['secret_answer'];
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $user3['user_id'];
    header ('location: Accueil.php');
        
}


else { header ('location: Connexionpagefail.php'); } ?> 
        


        