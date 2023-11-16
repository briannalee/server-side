<?php 
$conn1 = mysqli_connect('localhost','root','','week11');

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}else{
	echo "<p>Connection to Week 11 Database Successful!</p>";
}

mysqli_close($conn1);
echo "<p>Connection to Week 11 Database Closed!</p>";