<?php 
	
	$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43, "John"=>28, "Dave"=>31, "Bill"=>47);

	foreach($age as $key => $ageValue) {
		echo "<p>Records show the age of " . $key . " is set to " . $ageValue . "</p>";
	}
	
	echo "<hr style='background-color: white; height: 5px;' />";
	
?>
</body>
</html>