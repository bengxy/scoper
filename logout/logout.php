<?php
	session_start();
	$redirecturl = $_GET['redirect'];
	session_destroy();
	if($redirecturl==null || $redirecturl == ""){
		header('Location: http://localhost/~gaoben_pc/scoper/index.php');
		exit();
	}
	else{	
		header('Location:'.$redirecturl);
		exit();
	}
	
?>