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
$SecretAnswer = $_POST['SecretAnswer'];

$CheckUsernameAndSecretAnswerSQL = $db->prepare('SELECT * FROM users WHERE username = :username AND secret_answer = :secret_answer');
$CheckUsernameAndSecretAnswerSQL->bindParam(':username', $username);
$CheckUsernameAndSecretAnswerSQL->bindParam(':secret_answer', $SecretAnswer);
$CheckUsernameAndSecretAnswerSQL->execute();
$user = $CheckUsernameAndSecretAnswerSQL->fetch();

if ($user["username"] === $username && $user["secret_answer"] === $SecretAnswer) {
        include_once('NewPassword_submit.php');
        // code...
}

else { include_once('ForgottenPasswordFail.php'); } ?> 
        