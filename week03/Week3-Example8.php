<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Form Submission';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";
	?>
	<form method="get" action="Week3-Example8Response.php">
		<p>First Name: <input class="box1" type="text" name="firstName"></p>
		<p>Last Name:  <input class="box1" type="text" name="lastName"></p>
		<p>City:       <input class="box1" type="text" name="city"></p>
		<p>State:      <input class="box1" type="text" name="state"></p>
		<p>Zip Code:   <input class="box1" type="text" name="zipCode"></p>
		<input type="submit" value="Submit">
	</form>
<?php include("../footer.php"); ?>
