<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Week 14 - Secure Database Connection</title>
	<style>
		table 	{	margin:				0 auto; }
		th		{	min-width:			175px;
					color:				red;
					background-color:	white; }
		td {		color:				white;
					background-color:	red; }
		body {		background-color: 	blue; 
					color: 				white; }
		hr {		background-color: 	white;
					height:  			5px;}
	</style>
</head>
<body>
<h1>Secure Database Connection</h1>
<hr/>
<?php 

	// ADD DEFINE STATEMENTS HERE

	$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$conn1) {
		die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
	} else {
		echo "<p>Successfully Connected to Database: " . DB_NAME . "</p>";
	}
	
	$result = mysqli_query($conn1, "SELECT * FROM songList");

	$rowCount = mysqli_num_rows($result);
	echo "<p>There are " . $rowCount . " records in the table called songList</p>";

	echo "<table>";
	echo "<tr><th>ID</th><th>Song</th><th>Artist</th></tr>";
	$i=0;
	for($i=0; $i < $rowCount; $i++) {
		$row = mysqli_fetch_row($result);
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[4] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	mysqli_close($conn1);	
	echo "<p>Closed Database connection to " . DB_NAME . "</p>";
	
	echo "<p><a href='./index.php'>Back to Week 14 Homepage</a></p>";
	
?>
<hr />
</body>
</html>