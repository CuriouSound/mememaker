<?php
$host = '127.0.0.1';
$db = '';
$user = 'root';
$pass = 'Lula2018';
$charset = 'utf8mb4';

$dbh = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false,
];

try {
	$dbh = new PDO($dbh, $user, $pass, $options);


} catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}

$memesgenerator = $bdd->prepare('INSERT INTO `Id_memes`( `url_memes`, `titre`, `cheminlocal` VALUES ("value-1","value-2","value-3","value-4")');
return $memesgenerator->execute();
}