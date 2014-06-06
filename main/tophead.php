<div id="topline">
<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	if(isset($_SESSION['sess_name']) && isset($_SESSION['sess_passwd'])){
		$DBhandler = mysql_connect('localhost:3306', 'root', '');
		date_default_timezone_set ('Asia/Shanghai');
		$date = date('Y-m-d H:i:s');
		mysql_query('INSERT INTO scopeDB.recentSearch (UserName, Time, ShopName) value("'.$_SESSION['sess_name'].'","'.$date.'","'.$input.'")');				
		//$everything = mysql_query('INSERT INTO scopeDB.recentSearch (UserName, Time, ShopName) value($_SESSION['sess_name'],$input)');
		?>
		<span class="username"> <?php echo $_SESSION['sess_name']; ?></span>
		<a class="account" href="../logout/logout.php?&redirect=<?php echo $actual_link;?>">退出</a>
	<?php }
	else{ ?>
		<a class="account" href="../login/login.php?&redirect=<?php echo $actual_link;?>">登陆</a> 	
		<a class="account" href="../register/register.php">注册</a> 	
	<?php
	}
?>
</div>
