
<table>
	<form action="" method="post" enctype="multipart/form-data">
	<tr>
		<th>Đăng bài viết</th>
	</tr>
	<tr>
		<td>title: </td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>description: </td>
		<td><input type="text" name="description"></td>
	</tr>
	<tr>
		<td>content:</td>
		<td><input type="text" name="content"></td>
	</tr>
	<tr>
		<td>loai tin:</td>
		<td><select name="id_loaitin">
			<?php 
			require_once BASE_PATH . '/models/LoaitinModel.php';
			$loaitin= new LoaiTinModel(); 
			$loaiti= $loaitin->getAll();
			foreach ($loaiti as $lt) {
			 ?>
			<option value=" <?php echo $lt['id']; ?> "><?php echo $lt['name']; ?></option>
			<?php 
			} 
			?>
		</select>
		</td>
	</tr>
	<tr>
		<td><input type="file" name="file"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
	</form>
</table>