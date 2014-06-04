<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
?>
<div id="topline"><a class="account" href="login/login.php?&redirect=<?php echo $actual_link;?>">登陆</a> </div>
<?php 
echo 'checkcookie';
if(isset($_COOKIE['username'])){
	echo 'set';
}
print_r($_COOKIE);
?>
