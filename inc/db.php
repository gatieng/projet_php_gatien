<?php

$dsn = 'mysql:host=localhost;dbname=webforce4;charset=utf8';//Data Source Name


// try = essaie d'exécuter ce code
try {
$pdo = new PDO($dsn, $config['DB_username'], $config['DB_password']);
}

catch(Exception $e) {
	echo 'Connexion échouée<br>';
	echo $e->getMessage();
	exit;
}
