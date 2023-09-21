
	<?php 
		function returnLargest($val1, $val2, $val3, $val4) {
		if ($val1 > $val2) {
			$result1 = $val1;
		}else{
			$result1 = $val2;
		}

		if ($val3 > $val4) {
			$result2 = $val3;
		}else{
			$result2 = $val4;
		}

		if ($result1 > $result2) {
			$finalResult = $result1;
		}else {
			$finalResult = $result2;
		}

		return $finalResult;
	}

	?>


<h1>Custom Functions - Part 3</h1>
<?php
	echo "<p>The largest value from the first set of numbers is " . returnLargest(20,24,62,7) . "</p>";
	echo "<hr />";
	echo "<p>The largest value from the second set of numbers is " . returnLargest(100,9,42,41) . "</p>";
	echo "<hr />";
	echo "<p>The largest value from the third set of numbers is " . returnLargest(3,19,34,70) . "</p>";
	echo "<hr />";
	
	echo "<hr />";

?>
