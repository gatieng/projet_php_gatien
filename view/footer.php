<?php
echo $socialLinks->facebook->shareUrl;
echo $socialLinks->twitter->shareUrl;
echo $socialLinks->plus->shareUrl;
 ?>

	<div class="container">
		<div class="well well-sm">© copyright <?= date ('Y') ?>
		<a href="<?php echo $socialLinks->facebook->shareUrl ?>"> facebook </a>
		<a href="<?php echo $socialLinks->twitter->shareUrl ?>">twitter </a>
		<a href="<?php echo $socialLinks->plus->shareUrl ?>">plus </a>


		</div>
	</div>
</body>
</html>