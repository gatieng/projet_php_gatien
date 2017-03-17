
	<div class= "container" >

		<div style="text-align: right; margin-top: 40px" >	

			<?php if($pageNumber>1): ?>

				<a href="list.php?page=<?= $pageNumber -1 ?>" class="btn btn-info" role="button">Précédent</a>
			
			<?php endif; ?>

			<a href="list.php?page=<?= $pageNumber +1 ?>" class="btn btn-info" role="button">Suivant</a>

		</div> 

	<br>


	<!--table-->
	<table class="table">
		<thead>
			<th>stu_id</th>
			<th>stu_lastname</th>
			<th>stu_firstname</th>
			<th>stu_birthdate</th>
			<th>stu_email</th>
	<?php
		foreach ($studentInfo as $key => $value) {
		?>	
		<tr>
			<td><?php echo $value['stu_id'] ?></td>
			<td><?php echo $value['stu_lastname'] ?></td>
			<td><?php echo $value['stu_firstname'] ?></td>
			<td><?php echo $value['stu_birthdate'] ?></td>
			<td><?php echo $value['stu_email'] ?></td>
			<td ><a class="btn btn-info" href="student.php?id=<?php echo $value['stu_id'] ?>">voir</a></td>
		</tr>

	<?php
		}
	?>

	</table>
	</div> 

	<br>

