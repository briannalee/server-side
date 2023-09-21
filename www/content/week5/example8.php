	<?php 
	// This function accepts any number of arguments and averages them
		function findAverage() {
			$numberPassedIn = func_num_args();
			echo "<p>You have entered the following $numberPassedIn values: ";
			$sum = 0;
			for ($i=0; $i < $numberPassedIn ; $i++) { 
				$num = func_get_arg($i);
				$sum += $num;
				echo $num;
				if ($i != $numberPassedIn-1) {
					echo ', ';
				}
			}
			echo '</p>';
			
			return $sum/$numberPassedIn;
		}
		
		function helloThere($firstName = "Bob") {
			echo "<p>Hello there $firstName, how are you doing today?";
		}

	?>

<h1>Custom Functions - Part 2</h1>
<?php
	
	echo "Average is " . round(findAverage(1,5,6,4),2);
	echo "<hr />";
	echo "Average is " . round(findAverage(1,20,30,4,10,6),2);
	echo "<hr />";
	echo "Average is " . round(findAverage(1,20,30,4,10,6,8),2);
	echo "<hr />";
	echo "Average is " . round(findAverage(1,20,30,4,10,6,8,10,100,5),2);
	echo "<hr />";
	echo "Average is " . round(findAverage(2,10),2);
	echo "<hr />";
	helloThere("Fred");
	helloThere('George');
	helloThere();
	helloThere('Harry');
	echo "<hr />";

?>
