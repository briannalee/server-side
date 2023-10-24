<?php
$cars = array("Ford", "Chevy", "Honda", "Toyota", "Jeep", "Audi", "Tesla");

foreach ($cars as $value) {
	echo "<p>The current value inside the car array is $value</p>";
}

echo "<hr style='background-color: white; height: 5px;' />";

foreach ($cars as $key => $value) {
	echo "<p>The current value of index $key in the car array is $value</p>";
}
