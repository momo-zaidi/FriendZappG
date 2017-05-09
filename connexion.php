<?php
$host='127.0.0.1';
$user='admin';
$pass='';
$db='';
$dsn = "mysql:host=$host;dbname=$db";
//**************************************
//* connexion Ã  mysql et Ã  la db      *
//**************************************
try 
{
	$dbh = new PDO($dsn, $user, $pass); //db handle
} 
catch (PDOException $e) 
{
	die( "Erreur ! : " . $e->getMessage() );
}
?>
