<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Response to POST form';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$city = $_POST['firstName'];
	$state = $_POST['state'];
	$zipCode = $_POST['zipCode'];

	echo "<p>First Name: $firstName</p>";
	echo "<p>Last Name: $lastName</p>";
	echo "<p>City: $city</p>";
	echo "<p>State: $state</p>";
	echo "<p>Zip Code: $zipCode</p>";

	include("../footer.php");
	?>

