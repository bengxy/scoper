

<?php

$DBhandler = mysql_connect('localhost:3306', 'root', '');
$input = "裤子";
date_default_timezone_set ('Asia/Shanghai');
		$date = date('Y-m-d H:i:s');
mysql_query('INSERT INTO scopeDB.recentSearch (UserName, Time, ShopName) value("'.$_SESSION['sess_name'].'","'.$date.'","'.$input.'")');				
?>