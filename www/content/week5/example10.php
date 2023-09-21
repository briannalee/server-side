
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

  // My method for lazy people
  function returnLargestNum(...$numbers) {
		$numNumbers = count($numbers);

		// Sanity check
		if ($numNumbers <= 0) {
			echo "<p>Invalid Input</p>";
			return;
		}
		echo "<p>Numbers: ";
    
		$largest = 0;
		$count = 1;
    foreach ($numbers as $n) {
      if ($n > $largest) {
        $largest = $n;
      }
			echo "$n ";
			if ($count < $numNumbers) echo ", ";
			$count++;
    }

    return $largest;
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
	echo "<p>The largest value from the unlimited set of numbers is: " . returnLargestNum(5,100,4,80,10,30,50,30,34,64);
	echo "<hr />";

?>
