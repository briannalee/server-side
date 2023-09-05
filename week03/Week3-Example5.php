<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Associative Arrays';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";
		
		// METHOD 1 TO DEFINE ASSOCAIATIVE ARRAYS
		$ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43, "John" => 27, "Paul" => 22);
		
		// METHOD 2 TO DEFINE ASSOCAIATIVE ARRAYS
		$states['AL'] = "Alabama";
		$states['AK'] = "Alaska";
		$states['AZ'] = "Arizona";
		$states['AR'] = "Arkansas";
		$states['CA'] = "California";
		$states['CO'] = "Colorado";
		include("../footer.php");
	?>
