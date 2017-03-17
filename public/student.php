<?php
require dirname(dirname(__FILE__)).'/inc/config.php';

$studentid = isset($_GET['id']) ? $_GET['id'] : 0;

$sql = '
	SELECT stu_id, stu_lastname, stu_firstname, stu_email, stu_birthdate
	FROM student
	WHERE stu_id = :studentId
	';

$pdoStatement = $pdo->prepare($sql);

$pdoStatement->bindValue(':studentId',$studentid);

// Je gère le cas où il y a une erreur dans la requête SQL
if ($pdoStatement->execute() === false) {
	print_r($pdoStatement->errorInfo());
}
else {
	$resultList = $pdoStatement->fetch(PDO::FETCH_ASSOC);
	//print_r($resultList);

	$date = new DateTime($resultList['stu_birthdate']);
 	$now = new DateTime();
 	$age = $now->diff($date)->y;
}




//à la fin TOUJOURS les vues
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/student.php';
include dirname(dirname(__FILE__)).'/view/footer.php';