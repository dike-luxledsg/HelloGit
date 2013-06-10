<html>
	
	<form action="create_file.php" method="POST">
		file name: <input type="text" name="filename"><p>
		<input type="submit" value="creat file">
	</form>
	<h2>Files</h2>
</html>

<?php

	$full_path = ".";
	$dir = @opendir($full_path) or die("unable to open directory");

	while($file = readdir($dir)) {
		if ($file == "." || $file == ".." || $file == "index.php" || $file == "edit.php" 
			|| $file == "edit_file.php" || $file == "delete.php" || $file == "create_file.php" 
			|| $file == ".buildpath" || $file == ".project" || $file == ".settings")
			continue;
		
		echo "<a href='$file'>$file</a>.....<a href='edit.php?name=$file'>Edit</a>.....
			  <a href='delete.php?name=$file'>Delete</a><p>";
	}
?>