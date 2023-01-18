<?php 
try
{
    $db = new PDO('mysql:host=localhost;dbname=gbaf_database;charset=utf8', 'root', 'root');
}

catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}


$fullname = $_POST['FullName'];
$username = $_POST['UserName'];
$password = $_POST['Password'];
$secretquestion = $_POST['SecretQuestion'];
$secretanswer = $_POST['SecretAnswer'];
//
$CheckUsernameAvailableSQL = 'SELECT * FROM users WHERE username = $username ';
$CheckFullNameAvailableSQL = 'SELECT * FROM users WHERE username = $fullname ';




//Demande à l'utilisateur si le nom d'utilisateur est déjà utilisé
$CheckUsernameAvailableSQL = $db->prepare("SELECT * FROM users WHERE username = :username");
$CheckUsernameAvailableSQL->bindParam(':username', $username);
$CheckUsernameAvailableSQL->execute();
$user1 = $CheckUsernameAvailableSQL->fetch();
//Demande à SQL de vérifier si le nom complet est déjà utilisé
$CheckFullNameAvailableSQL = $db->prepare("SELECT * FROM users WHERE full_name = :fullname");
$CheckFullNameAvailableSQL->bindParam(':fullname', $fullname);
$CheckFullNameAvailableSQL->execute();
$user2 = $CheckFullNameAvailableSQL->fetch();
if ($user1) {
    echo "Le nom d'utilisateur n'est pas disponible";
    exit(); // ce code stoppe le script
} elseif ($user2) {
    echo "Le nom complet est déjà utilisé";
    exit();
    // code...
} 
else {

    

//Ecriture de la requête
$sqlQuery = 'INSERT INTO users(full_name, username, password, secret_question, secret_answer) VALUES (:full_name, :username, :password, :secret_question, :secret_answer)';
//Préparation
$insertUser = $db->prepare($sqlQuery);
// Execution
$insertUser->execute([
'full_name' => $fullname,
'username' => $username,
'password' => $password,
'secret_question' => $secretquestion,
'secret_answer' => $secretanswer,
]); };

?>


    
