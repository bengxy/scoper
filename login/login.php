<?php 
ob_start();
//check cookie
session_start();
?>
<html>
<meta charset="utf-8"/>
<head>
	<link rel="stylesheet" href="../KickStart/css/kickstart.css" media="all"/>
	<link rel="stylesheet" href="../css/login.css" media="all"/>
	<script src="../KickStart/jquery-1.11.0.min.js"></script>
	<script src="../KickStart/js/kickstart.js"></script>
	<script src="login.js"></script>
</head>
<?php 
	$redirecturl = $_GET['redirect'];
	echo $redirecturl; 
	$name = $_POST['username'];
	$passwd = $_POST['passwd'];
	if(isset($_COOKIE['username'])&&isset($_COOKIE['password'])){
		$cookie_name = $_COOKIE['username'];
		$cookie_passwd = $_COOKIE['password'];
		$DBhandler = mysql_connect('localhost:3306', 'root', '');
		$everything = mysql_query('SELECT * FROM scopeDB.UserInfo WHERE UserName = "'.$cookie_name.'"');
		if(mysql_num_rows($everything)>0){
			$row =  mysql_fetch_array($everything);			
			if($passwd == $row['passwd']){
				$_SESSION['sess_name'] = $name;
				$_SESSION['sess_passwd'] = $passwd;
				if($redirecturl==null || $redirecturl == ""){
					header('Location: http://localhost/~gaoben_pc/scoper/index.php');
					exit();
				}
				else{
					header('Location:'.$redirecturl);
					exit();
				}
			}
			else{
				//TODO: ERROR
			}
		}
		else{
			//TODO: ERROR
		}
	}

?>
	<div class="top"> first line
	</div>
	<div class="centerline">
		
		<div class="showgraph">left</div>
		<div class="logincontent">
			<p>登陆</p>
			<div class="notice error" id="usererror"><i class="icon-remove-sign icon-small"></i>
			 用户不存在
			 <a class="icon-remove"></a></div>
			<div class="notice error" id="passwderror"><i class="icon-remove-sign icon-small"></i>
			 密码错误
			 <a class="icon-remove"></a></div>
			<div class="notice error" id="verifyerror"><i class="icon-remove-sign icon-small"></i>
			 验证码错误
			 <a class="icon-remove"></a></div>
			
			<form class="formcont" name="myform" method="post" action="" onsubmit="return checkall();">
					<input class="inputbar" id="userid" placeholder="用户名" type="text" name="username" onFocus="resetname();"/>
					<input class="inputbar" id="passwd" placeholder="密码" type="password" name="passwd" onFocus="resetpasswd();"/>
					<input type="hidden" value=<?php echo $redirecturl;?> name="redirecturl">
					<input  id="logbtn" type="submit" value="登陆"/>
			</form>
			
			<?php
			if($name != null&&$name != ""){	
				$DBhandler = mysql_connect('localhost:3306', 'root', '');
				$everything = mysql_query('SELECT * FROM scopeDB.UserInfo WHERE UserName = "'.$name.'"');
				if(!mysql_num_rows($everything)>0){
					echo '<script type="text/javascript">setusererror();</script>';
				}
				else{
					$row =  mysql_fetch_array($everything);			
					if($passwd == $row['passwd']){
						echo '<script type="text/javascript">alert("cookie");</script>';
						setcookie('username', $name, time()+3600, '/');
						setcookie('password', $passwd, time()+3600, '/');					
						$_SESSION['sess_name'] = $name;
						$_SESSION['sess_passwd'] = $passwd;
						if($redirecturl==null || $redirecturl == ""){
							header('Location: http://localhost/~gaoben_pc/scoper/index.php');
							exit();
						}
						else{
							header('Location:'.$redirecturl);
							exit();
						}
					}
					else{
						echo '<script type="text/javascript">setpasswderror();</script>';	
					}
				}
			}
			ob_end_flush();
			?>
		</div>
	</div>
	<div class="bottom">bottom</div>
</html>