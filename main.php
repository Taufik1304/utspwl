<?php
	// get request from url
	$hal = $_REQUEST['hal'];

	if (empty($hal)) {
		# include content view
		include_once 'view/content/content.php';
	} else {
		# include content view
		include_once 'view/content/'.$hal.'.php';
	}
	
?>