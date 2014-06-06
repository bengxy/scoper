<html>
<meta charset="utf-8"/>
<head>
	<link rel="stylesheet" href="../KickStart/css/kickstart.css" media="all"/>
	<link rel="stylesheet" href="../css/register.css" media="all"/>
	<script src="../KickStart/jquery-1.11.0.min.js"></script>
	<script src="../KickStart/js/kickstart.js"></script>
	<script src="register.js"></script>
</head>
<div class="mainregi">
	<form class="regform" name="" method="post" action="check.php" onsubmit="return checkcont();">
		
		<input class="userbar" id="username" placeholder="输入用户名(6-10个字符)" type="text" name="username" onFocus="resetname();"/>
		
		<br />
		<input class="userbar" id="passwd" placeholder="输入密码(6-16位)" type="password" name="passwd" onFocus="resetpasswd();"/>
		<br />
		<input class="userbar" id="regbtn" type="submit" value="注册"/>
	</form>
</div>
</html>
