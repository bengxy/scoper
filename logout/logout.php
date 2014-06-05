<?php
	session_start();
	$redirecturl = $_GET['redirect'];
	session_destroy();
	setcookie('username', '' , time()-3600, '/');
	setcookie('passwd', '', time()-3600, '/');
	if($redirecturl==null || $redirecturl == ""){
		header('Location: http://localhost/~gaoben_pc/scoper/index.php');
		exit();
	}
	else{	
		header('Location:'.$redirecturl);
		exit();
	}
?>