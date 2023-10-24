<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week9_example1');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}
echo "<p>Successfully Connected to Database: " . DB_NAME . "</p>";
echo "<hr/>";

$query = "SELECT * FROM employees";
$result = mysqli_query($conn1, $query);
$i = 0;
for ($i = 0; $i < 5; $i++) {
	$row = mysqli_fetch_array($result);
	$idArray[$i] = $row[0];
	$firstNameArray[$i] = $row[1];
	$lastNameArray[$i] = $row[2];
	$phoneArray[$i] = $row[3];
	$emailArray[$i] = $row[4];
}

$allID = implode(" : ", $idArray);
$allfirst = implode(" : ", $firstNameArray);
$alllast = implode(" : ", $lastNameArray);
$allphone = implode(" : ", $phoneArray);
$allemail = implode(" : ", $emailArray);

echo "<p>The IDs are " . $allID . "</p>";
echo "<p>The firstNames are " . $allfirst . "</p>";
echo "<p>The lastNames are " . $alllast . "</p>";
echo "<p>The phones are " . $allphone . "</p>";
echo "<p>The emails are " . $allemail . "</p>";

mysqli_close($conn1);
