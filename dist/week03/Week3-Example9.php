<?php
	include '../environment.php';
	$pageTitle = 'Form Submission with POST';
	include '../header.php';
	echo "<h1>$pageTitle</h1>";
	?>
	<form method="post" action="Week3-Example9Response.php">
		<p>First Name: <input class="form-control" type="text" name="firstName"></p>
		<p>Last Name:  <input class="form-control" type="text" name="lastName"></p>
		<p>City:       <input class="form-control" type="text" name="city"></p>
		<p>State:      <input class="form-control" type="text" name="state"></p>
		<p>Zip Code:   <input class="form-control" type="text" name="zipCode"></p>
		<input type="submit" value="Submit">
	</form>
<?php include("../footer.php"); ?>
