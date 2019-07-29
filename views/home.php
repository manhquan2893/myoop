<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
	<section>
		<h3>Loại tin 1</h3>
		<div class="list">
		<?php 
			foreach ($tintu as $tt) {
				if ($tt['id_loaitin']==1) {
		?>
		<div class="post">
			<img src=" <?php echo 'upload/' . $tt['thumb'];?> " alt="">
			<div><?php echo $tt['title']; ?></div>
		</div>
		<?php
			}
			}
		 ?>
		 </div>
	</section>

	
	<section>
		<h3>Loại tin 2</h3>
		<div class="list">
		<?php 
			foreach ($tintu as $tt) {
				if ($tt['id_loaitin']==2) {
		?>
		<div class="post">
			<img src=" <?php echo 'upload/' . $tt['thumb'];?> " alt="">
			<div><?php echo $tt['title']; ?></div>
		</div>
		<?php
			}
			}
		 ?>
		 </div>
	</section>		
</body>
</html>
