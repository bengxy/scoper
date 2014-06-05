<?php
$name = '234';
//setcookie('name', $name, time()+3600);
//header('Location: http://localhost/~gaoben_pc/scoper/index.php');
//print_r($_COOKIE);
//session_start();
//$_SESSION['testname'] = $name;
echo $_SESSION['testname'];

$DBhandler = mysql_connect('localhost:3306', 'root', '');
$everything = mysql_query('SELECT * FROM scopeDB.UserInfo WHERE UserName = "FirstUser"');
//echo $everything;
if($everything == false){
	echo 'false';
}
?>