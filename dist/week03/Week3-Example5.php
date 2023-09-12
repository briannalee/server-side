<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Associative Arrays';
	include '../header.php';
	
		
		// METHOD 1 TO DEFINE ASSOCIATIVE ARRAYS
		$ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43, "John" => 27, "Paul" => 22);

		echo "<p>The age of Peter is " . $ages['Peter'] . "</p>";
		echo "<p>The age of John is " . $ages['John'] . "</p>";
		$length1 = count($ages);
		
		echo "<p>There are $length1 elements in the age array.</p>";
		echo "<p>The entire array is:</p><p>";
		print_r($ages);
		echo "</p><hr>";

		// METHOD 2 TO DEFINE ASSOCIATIVE ARRAYS
		$states['AL'] = "Alabama";
		$states['AK'] = "Alaska";
		$states['AZ'] = "Arizona";
		$states['AR'] = "Arkansas";
		$states['CA'] = "California";
		$states['CO'] = "Colorado";

		$length2 = count($states);
		echo "<p>AL is short for " . $states['AL'] . "</p>";
		echo "<p>CA is short for " . $states['CA'] . "</p>";
		$length1 = count($ages);
		
		echo "<p>There are $length2 elements in the state array.</p>";
		echo "<p>The entire array is:</p><p>";
		print_r($states);
		echo "</p><hr>";

		$result1 = array_search("California", $states);
		echo "<p>The index associated with California is $result1</p><hr>";

		include("../footer.php");
