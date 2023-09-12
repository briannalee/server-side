<?php
	include '../environment.php';
	$pageTitle = 'Week 4 - Example 3 Response';
	include '../header.php';
	
	echo "<p>Thanks for submitting your info " . $_POST['name'] . "</p>" ;
	echo "<p>The client computer info is:</p><p>";
	echo $_POST['clientInfo'] . "</p>";

	include "../footer.php";
