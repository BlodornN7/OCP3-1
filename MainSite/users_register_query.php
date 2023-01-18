<?php
//Connexion à la base de donnée et capture d'une erreur éventuelle. 
try
{
	$db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
	die('Erreur : ' . $e->getMessage());
}


//Ecriture de la requête
$sqlQuery = 'INSERT INTO users(full_name, username, password, secret_question, secret_answer) VALUES (:full_name, :username, :password, :secret_question, :secret_answer)';
//Préparation
$insertUser = $db->prepare($sqlQuery);
// Execution
$insertUser->execute([
'full_name' => 'Charlotte Vercelloneee',
'username' => 'Chaberryee',
'password' => 'Vocaloid20ee',
'secret_question' => 'Quel est le nom de mon copainee ?',
'secret_answer' => 'Jimmyee',
]);