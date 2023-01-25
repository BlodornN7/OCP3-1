<?php
 
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}


$SqlQuery = 'SELECT * FROM comments WHERE entreprise = "Formationandco"';
$getcomment = $db->prepare($SqlQuery);
$getcomment->execute();
$comment = $getcomment->fetchAll();
