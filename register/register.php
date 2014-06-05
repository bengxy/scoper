<?php
$redirecturl = $_GET['redirect'];
$username = $_POST['username'];
$passwd = $_POST['passwd'];
echo $username;
echo '<br />';
echo $passwd;
if($username!=null){
	$DBhandler = mysql_connect('localhost:3306', 'root', '');
	$everything = mysql_query('INSERT INTO scopeDB.UserInfo (UserName, passwd) value("'.$username.'","'.$passwd.'")');
}
?>
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
	<form class="regform" name="" method="post" action="" onsubmit="return checkcont();">
		
		<input class="userbar" id="username" placeholder="输入用户名" type="text" name="username" onFocus="resetname();"/>
		<span>[a-z][A-Z][0-9]</span>
		<br />
		<input class="userbar" id="passwd" placeholder="输入密码" type="password" name="passwd" onFocus="resetpasswd();"/>
		<br />
		<input type="hidden" value=<?php echo $redirecturl;?> name="redirecturl">
		<input class="userbar" id="regbtn" type="submit" value="注册"/>
	</form>
</div>
</html>
