<?php 
echo "<p>Time to delete the cookies</p>";

$time = time();

setcookie('favColor','',$time-60);
setcookie('favFood','',$time-60);