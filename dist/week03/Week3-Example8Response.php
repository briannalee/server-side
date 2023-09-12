<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Response to GET Form';
	include '../header.php';


	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$city = $_GET['firstName'];
	$state = $_GET['state'];
	$zipCode = $_GET['zipCode'];

	echo "<p>First Name: $firstName</p>";
	echo "<p>Last Name: $lastName</p>";
	echo "<p>City: $city</p>";
	echo "<p>State: $state</p>";
	echo "<p>Zip Code: $zipCode</p>";

	include("../footer.php");
