<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Define a destination

if (isset($_POST['filename']) && $_SERVER['DOCUMENT_ROOT']) {
	$targetFolder = ''; 
	$path = __dir__ . '/uploads/' . $_POST['filename'];
	if (file_exists($path)) {
		echo 1;
	} else {
		echo 0;
	}
} else {
	echo 0;
}
