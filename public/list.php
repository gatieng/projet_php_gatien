<?php
require dirname(dirname(__FILE__)).'/inc/config.php';
//print_r($_GET);exit;
if (isset($_GET ['page'])) {
	$pageNumber = $_GET ['page'];
}
else {
	$pageNumber = 1;
}

$pageOffset = ($pageNumber-1)*5;

$sql ="
	SELECT stu_id, stu_lastname, stu_firstname, stu_birthdate, stu_email
	FROM student
	ORDER BY stu_id ASC
	LIMIT 5
	OFFSET $pageOffset"
	;

$results = $pdo->query($sql);
if ($results === false) {
	print_r($pdo->errorInfo());
}
else {
	$studentInfo = $results->fetchAll(PDO::FETCH_ASSOC);
	//print_r($studentInfo);
}



//à la fin TOUJOURS les vues
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/list.php';
include dirname(dirname(__FILE__)).'/view/footer.php';