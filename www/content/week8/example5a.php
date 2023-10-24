<?php 
$time = time();

echo "<p>The number of seconds since the UNIX Epoch is $time</p>";
echo "<p>Settings two cookies now</p>";
//setcookie("favColor", 'purple', $time+60);
//setcookie("favFood",'tacos',$time+60);

//Set to one hour, not 60 seconds
setcookie("favColor", 'purple', $time+3600,'/');
setcookie("favFood",'tacos',$time+3600,'/');

echo "<p>The cookie favColor is set to". $_COOKIE['favColor']."</p>";
echo "<p>The cookie favColor is set to". $_COOKIE['favFood']."</p>";

echo "<p><a href='/weeks/8/example5b/Cookies'>Link to cookies part B</a></p>";