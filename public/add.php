<?php
require dirname(dirname(__FILE__)).'/inc/config.php';


$sql = '
	SELECT cit_name, cit_id
	FROM city
	';


$pdoStatement = $pdo->prepare($sql);

// Je gère le cas où il y a une erreur dans la requête SQL
if ($pdoStatement->execute() === false) {
	print_r($pdoStatement->errorInfo());
}
else {
	$cityList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
	print_r($cityList);
}

$sql = '
	SELECT tra_name, ses_number
	FROM session
	INNER JOIN training ON training.tra_id = session.training_tra_id
	';

$pdoStatement = $pdo->prepare($sql);

// Je gère le cas où il y a une erreur dans la requête SQL
if ($pdoStatement->execute() === false) {
	print_r($pdoStatement->errorInfo());
}
else {
	$sessionList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
	print_r($sessionList);
}



//à la fin TOUJOURS les vues
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/add.php';
include dirname(dirname(__FILE__)).'/view/footer.php';