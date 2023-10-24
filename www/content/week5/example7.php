
	<?php 
		// FUNCTION WITH NO ARGUEMENTS AND NO RETURN VALUES
		function greetings() {
			echo "<p>Hello there, how are you today?</p>";
		}

		function greetings2($firstName, $dayOfTheWeek) {
			echo "<p>Hello there $firstName, how are you on this fine $dayOfTheWeek?<p>";
		}
		// FUNCTION WITH TWO STRING ARGUEMENTS AND NO RETURN VALUES
		
	?>
<h1>Custom Functions - Part 1</h1>
<?php
	// call the function with all lowercase 
	greetings();
	// call the function with all uppercase
	GREETINGS();
	// call the functions with a mix of lower and uppercase
	GrEetings();
	// call the second function with two arguments multiple times
	greetings2('John','Friday');
	greetings2('Paul','Monday');
	greetings2('George','Tuesday');
	greetings2('Ringo','Thursday');
?>
