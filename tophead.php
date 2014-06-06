<div id="topline">
<?php
	header("Content-Type: text/html; charset=utf-8");

	session_start();
	$shopitem = array();
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	if(isset($_SESSION['sess_name']) && isset($_SESSION['sess_passwd'])){
		$DBhandler = mysql_connect('localhost:3306', 'root', '');
		$everything = mysql_query('SELECT * FROM scopeDB.recentSearch WHERE UserName = "'.$_SESSION['sess_name'].'" ORDER BY TIME desc  LIMIT 0, 4;');
		$total = mysql_num_rows($everything);
		$i = 0;
		while($row = mysql_fetch_array($everything)){
			$hisitem[$i] = $row['ShopName'];
			//echo $hisitme[$i];
			$i++;
		}
		?>
		<span class="username"> <?php echo $_SESSION['sess_name']; ?></span>
		<a class="account" href="logout/logout.php?&redirect=<?php echo $actual_link;?>">退出</a>
	<?php }
	else{ 
		?>
		<a class="account" href="login/login.php?&redirect=<?php echo $actual_link;?>">登陆</a> 	
		<a class="account" href="register/register.php">注册</a> 	
	<?php
	}
?>
</div>
