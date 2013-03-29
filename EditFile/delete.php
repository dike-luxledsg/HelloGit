<?php
	$file_name = $_GET['name'];
	unlink($file_name);
	echo "<a href='index.php'>delete successfule, click here to continue</a>";
?>