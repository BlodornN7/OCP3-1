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
$newpassword = $_POST['NewPassword'];

// Demande à db de mettre à jour le mot de passe de l'utilisateur
$UpdateUserPasswordSQL = $db->prepare('UPDATE users SET password = :password WHERE username = :username');
$UpdateUserPasswordSQL->bindParam(':username', $username);
$UpdateUserPasswordSQL->bindParam(':password', $newpassword);
$UpdateUserPasswordSQL->execute();
$passwordupdated = $UpdateUserPasswordSQL;
//Demande à PHP de notifier l'utilisateur de la réussite de l'opération 
if ($passwordupdated) { echo "Mot de passe modifié !";
    
}
//Notifie l'utilisateur de l'échec de l'opération
else { echo "Une erreur est survenue";

}

?>