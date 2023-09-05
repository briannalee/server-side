<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Displaying Constants';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";

	// When third value is true, constant allows lowercase
	define('USERNAME1', 'briannaRagsdale');
	echo "<p>The value of username1 is " . USERNAME1 . "</p>";
	// @ignore
	//echo "<p>The value of username1 lowercase const is " . username1 . "</p>";

	define('USERNAME2', 'janeDoe');
	echo "<p>The value of username1 is " . USERNAME2 . "</p>";
	// @ts-ignore
	//echo "<p>The value of username1 lowercase const is " . username2 . "</p>";
	echo "<hr>";

	// Float const
	define('PI', '3.14159');
	echo "<p>The value of PI is " . PI . "</p>";
	echo "<hr />";

	// Lowercase const
	define('radius', 4);
	$result = 2 * PI * radius;
	echo "<p>The circumference of a circle with the radius of " . radius . " is $result</p>";
	echo "<hr />";
	include("../footer.php");		

	// Bool const
	define('isMonday', true);
	echo "<p>The value of isMonday is " . isMonday;
	define('isFriday', false);
	echo "<p>The value of isFriday is " . isFriday;
	
	include("../footer.php");
?>
