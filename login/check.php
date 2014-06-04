<?php
	ob_start();
	echo $redirecturl = $_POST['redirecturl'];
	if($passwd == $row['passwd']){
				//sleep(5);
				//echo $redirecturl;
		echo 'enter';
		if($redirecturl==null || $redirecturl == ""){
			header('Location: http://localhost/~gaoben_pc/scoper/index.php');
		}
		else{
			echo 'enter';
			header('Location:'.$redirecturl);
		}
	}
	ob_end_flush();
?>