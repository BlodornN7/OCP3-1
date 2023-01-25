<?php
 session_start();
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

$comment = $_POST["Comment"];
$username = $_SESSION["username"];
$user_id = $_SESSION["user_id"];
$entreprise = "CDE";

$SqlQuery = 'INSERT INTO comments(comment, username, entreprise) VALUES (:comment, :username, :entreprise)';
$SetComment = $db->prepare($SqlQuery);
$SetComment->execute([
'comment' => $comment,
'username' => $username,
'entreprise' => $entreprise
]);