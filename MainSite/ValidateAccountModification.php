<?php session_start();
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if(!empty($_POST['FullName'])) {
    $fullname = $_POST['FullName'];
$ModifyAccountInfoSQL = $db->prepare('UPDATE users SET full_name = :full_name WHERE username = :username');
$ModifyAccountInfoSQL->bindParam(':username', $_SESSION['username']);
$ModifyAccountInfoSQL->bindParam(':full_name', $fullname);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['full_name'] = $fullname;
header('location: AccountModification.php');

}
elseif ($_POST['UserName']) {
    $username = $_POST['UserName'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users SET username = :username WHERE password = :password');
    $ModifyAccountInfoSQL->bindParam(':username', $username);
    $ModifyAccountInfoSQL->bindParam(':password', $_SESSION['password']);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['username'] = $username;
header('location: AccountModification.php');
    }
elseif ($_POST['Password']) {
    $password = $_POST['Password'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users SET password = :password WHERE username = :username');
    $ModifyAccountInfoSQL->bindParam(':username', $_SESSION['username']);
    $ModifyAccountInfoSQL->bindParam(':password', $password);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['password'] = $password;
header('location: AccountModification.php');
    }
elseif ($_POST['SecretQuestion']) {
    $secretquestion = $_POST['SecretQuestion'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users SET secret_question = :secret_question WHERE username = :username');
    $ModifyAccountInfoSQL->bindParam(':username', $_SESSION['username']);
    $ModifyAccountInfoSQL->bindParam(':secret_question', $secretquestion);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['secret_question'] = $secretquestion;
header('location: AccountModification.php');
    }
elseif ($_POST['SecretAnswer']) {
    $secretanswer = $_POST['SecretAnswer'];
    $ModifyAccountInfoSQL = $db->prepare('UPDATE users SET secret_answer = :secret_answer WHERE username = :username');
    $ModifyAccountInfoSQL->bindParam(':username', $_SESSION['username']);
    $ModifyAccountInfoSQL->bindParam(':secret_answer', $secretanswer);
$ModifyAccountInfoSQL->execute();
session_start();
$_SESSION['secret_answer'] = $secretanswer;
header('location: AccountModification.php');
    }
else {
     echo "Aucune entrée detectée";
};