<?php session_start(); 
      error_reporting(0);
      
try
 {
     $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
 }
 
 catch (Exception $e) 
 {
     die('Erreur : ' . $e->getMessage());
 }

if ($_POST['like'])   {

    $acteurid = $_POST['id_acteur'];
    $like = $_POST['like'];
    $userid = $_SESSION['user_id'];
    
 $SQLQueryLike = $db->prepare('INSERT INTO vote SET id_user = :id_user, id_acteur = :id_acteur, vote = :vote');
 $SQLQueryLike->bindParam(':id_user', $userid);
 $SQLQueryLike->bindParam(':id_acteur', $acteurid);
 $SQLQueryLike->bindParam(':vote', $like);
 $SQLQueryLike->execute();
 header('location: pageacteur.php?='.$Acteurs['id_acteur'].'');
 }
 else {
    $acteurid = $_POST['id_acteur'];
 $dislike = $_POST['dislike'];
 $userid = $_SESSION['user_id'];
 
 $SQLQueryDislike = $db->prepare('INSERT INTO vote SET id_user = :id_user, id_acteur = :id_acteur, vote = :vote');
 $SQLQueryDislike->bindParam(':id_user', $userid);
 $SQLQueryDislike->bindParam(':id_acteur', $acteurid);
 $SQLQueryDislike->bindParam(':vote', $dislike);
 $SQLQueryDislike->execute();
 header('location: pageacteur.php?='.$Acteurs['id_acteur'].'');

 
 
 };
 ?>