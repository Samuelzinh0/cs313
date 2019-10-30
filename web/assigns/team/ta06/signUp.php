<?php

require("dbConnect.php");
$db = get_db();




$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword =  password_hash($password, PASSWORD_DEFAULT);
//echo "Password: $password, username: $username, Hashed: $hashedPassword";


try
{
   $query = 'INSERT INTO "user1" (username, password) VALUES(:username, :hashedPassword)';
   $statement = $db->prepare($query);
   $statement->bindValue(':username', $username);
   $statement->bindValue(':hashedPassword', $hashedPassword);
   $statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header('Location: loginPage.php');

?>
