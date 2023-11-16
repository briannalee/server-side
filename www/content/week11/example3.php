<?php 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'week11');
$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}else{
	echo "<p>Connection to Week 11 Database Successful!</p>";
}

$query = "SELECT * FROM ranking";
$result = mysqli_query($conn1, $query);
var_dump($result);
$row_count = mysqli_num_rows($result);
echo "<p>There are $row_count rows in the rankings table.</p>";

mysqli_close($conn1);
echo "<p>Connection to Week 11 Database Closed!</p>";