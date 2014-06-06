<html>
<meta charset="utf-8"/>
<?php
$is_success = false;
$username = $_POST['username'];
$passwd = $_POST['passwd'];
if(mb_strlen($username)<6){
	echo '用户名过短<br />';
}
else if(mb_strlen($username)>10){
	echo '用户名过长<br />';	
}
else if(strlen($passwd)>10||strlen($passwd)<6){
	echo '密码长度不符合要求<br />';
}
else if($username!=null&&passwd!=null){
	$DBhandler = mysql_connect('localhost:3306', 'root', '');
	$isexist = mysql_query('SELECT * FROM scopeDB.UserInfo WHERE UserName ="'.$username.'"');

	if(mysql_num_rows($isexist) == 0 ){
		$result = $everything = mysql_query('INSERT INTO scopeDB.UserInfo (UserName, passwd) value("'.$username.'","'.$passwd.'")');
		if($result){
			echo '注册成功<br />';
			$is_success = true;
		}
		else{
			echo '服务器返回错误<br />';
		}
	}
	else{
		echo '用户名已存在<br />';
	}
}
if($is_success){
	echo '<a href="../login/login.php">返回登陆</a>';
}
else{
	echo '<a href="register.php">返回注册</a>';
}
?>
</html>