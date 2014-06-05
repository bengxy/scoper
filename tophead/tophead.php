<div id="topline">
<?php
	session_start();
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	if(isset($_SESSION['sess_name']) && isset($_SESSION['sess_passwd'])){
		
		?>
		<span class="username"> <?php echo $_SESSION['sess_name']; ?></span>
		<a class="account" href="logout/logout.php?&redirect=<?php echo $actual_link;?>">退出</a>
		<a class="account" href="favor.php">我的收藏夹</a>
		
	<?php }
	else{ ?>
		<a class="account" href="login/login.php?&redirect=<?php echo $actual_link;?>">登陆</a> 	
		<a class="account" href="register/register.php?&redirect=<?php echo $actual_link;?>">注册</a> 	
	<?php
	}
?>
</div>
