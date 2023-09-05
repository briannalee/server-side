<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Displaying Server Variables with var_dump';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";
	echo "<hr/>";

	$firstName = "Brianna";
	$lastName = "Ragsdale";
	$age1 = 25;
	$age2 = 34;
	$pi = 3.14159;
	$price1 = 17.99;
	$isMonday = true;
	$isFriday = false;

	// Concat
	echo "<p>My full name is " . $firstName . " " . $lastName . "</p>";
	echo "<p>The var_dump value for firstName is:</p>";
	echo "<p>" . var_dump($firstName) . "</p>";
	echo "<p>The var_dump value for lastName is:</p>";
	echo "<p>" . var_dump($lastName) . "</p>";
	echo "<hr />";

	// Embed variables in strings
	$value1 = $age1 + $age2;
	echo "<p>Adding $age1 and $age2 together results in $value1</p>";
	echo "<p>The var_dump value for the result is:</p>";
	echo "<p>" . var_dump($value1) . "</p>";
	echo "<hr />";

	// Multiply two floats
	$value2 = $pi * $price1;
	echo "<p>Multiplying two floating point numbers results in $value2</p>";
	echo "<p>The var_dump for the value is</p>";
	echo "<p>" . var_dump($value2) . "</p>";
	echo "<hr/>";
	include '../footer.php'; 

	// Show booleans
	echo "<p>The value of isMonday is $isMonday </p>";
	echo "<p>The var_dump value is:</p>";
	echo "<p>" . var_dump($isMonday) . "</p>";
	echo "<hr />";

	// Use null to empty vars
	echo "<p>The var_dump for old value1 is:</p>";
	echo "<p>" . var_dump($value1) . "</p>";
	$value1 = null;
	echo "<p>The var_dump for new value is:</p>";
	echo "<p>" . var_dump($value1) . "</p>";
	echo "<hr />";
?>
