<?php
$name = '234';
setcookie('name', $name, time()+3600);
header('Location: http://localhost/~gaoben_pc/scoper/index.php');
print_r($_COOKIE);

?>