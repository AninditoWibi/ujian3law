<?php
	$target_dir = "SharedStorage/";
	$listOfExistingFiles = array_diff(scandir($target_dir), array('..', '.'));
	foreach ($listOfExistingFiles as $file) {
		echo $file.",";
	}
?>
