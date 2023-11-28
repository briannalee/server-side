<?php 

	// ADD DEFINE STATEMENTS HERE
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', 'TOPsecret1');
	define('DB_NAME', 'week14');

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