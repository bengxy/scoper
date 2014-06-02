<?php 
$DBhandler = mysql_connect('localhost:3306','root','');
//mysql_select_db("scopeDB", $DBhandler);
$result = mysql_query("SELECT passwd FROM scopeDB.UserInfo where UserID = 1");
//echo $result;
$row = mysql_fetch_array($result);
echo $row['UserID'];
echo '<br />';
echo $row['passwd'];
?>