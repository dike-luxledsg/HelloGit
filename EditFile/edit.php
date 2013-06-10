<?php
	$file_name = $_GET['name'];
	$file = fopen($file_name, 'r');
	if (filesize($file_name) > 0) {
		$edit = fread($file, filesize($file_name));
	}
	fclose($file);
?>

<html>

	<form action="edit_file.php" method="POST">
	
		Edit:<br> <textarea name="edit" cols="100" rows="20"><?php echo $edit; ?></textarea><p>
		<input type="hidden" name="file_name" value="<?php echo $file_name; ?>"><p>
		<input type="submit" value="Save">
	</form>

</html>