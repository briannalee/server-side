<?php 

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'week14');

	$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$conn1) {
		die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
	} 

	// CHANGE dateAdded to 2017-01-01 for all songs in album 'One'
	$query = "UPDATE songList SET dateAdded='2023-01-01' WHERE album='One'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album One</p>";
	// CHANGE dateAdded to 2017-02-01 for album Help!
	$query = "UPDATE songList SET dateAdded='2023-02-01' WHERE album='Help!'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Help!</p>";
	// CHANGE dateAdded to 2017-03-01 for album Led Zeppelin IV
	$query = "UPDATE songList SET dateAdded='2023-03-01' WHERE album='Led Zeppelin IV'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Led Zeppelin IV</p>";
	// CHANGE dateAdded to 2017-04-01 for album Houses Of The Holy
	$query = "UPDATE songList SET dateAdded='2023-04-01' WHERE album='Houses Of The Holy'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Houses Of The Holy</p>";
	// CHANGE dateAdded to 2017-05-01 for album Moving Pictures
	$query = "UPDATE songList SET dateAdded='2023-05-01' WHERE album='Moving Pictures'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Moving Pictures</p>";
	// CHANGE dateAdded to 2017-06-01 for album Grace Under Pressure
	$query = "UPDATE songList SET dateAdded='2023-06-01' WHERE album='Grace Under Pressure'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Grace Under Pressure</p>";
	// CHANGE dateAdded to 2017-07-01 for album Tattoo You
	$query = "UPDATE songList SET dateAdded='2023-07-01' WHERE album='Tattoo You'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Tattoo You</p>";
	// CHANGE dateAdded to 2017-08-01 for album Let It Bleed
	$query = "UPDATE songList SET dateAdded='2023-08-01' WHERE album='Let It Bleed'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Let It Bleed</p>";
	// CHANGE dateAdded to 2017-09-01 for album Roll The Bones
	$query = "UPDATE songList SET dateAdded='2023-09-01' WHERE album='Roll The Bones'";
	$result = mysqli_query($conn1, $query);
	echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for album Roll The Bones</p>";


	
	// CHANGE timeAdded to 01:00:00 for track 1
	// CHANGE timeAdded to 02:00:00 for track 2, etc
	// USE A FOR LOOP TO GO FROM TRACKS 1 THROUGH 23
	for($i=1; $i <= 23; $i++) {
		$query = "UPDATE songList SET timeAdded='0" . $i . ":00:00' WHERE track=" . $i;
		$result = mysqli_query($conn1, $query);
		echo "<p>Updated " . mysqli_affected_rows($conn1) . " records for track " . $i . "</p>";
	}

	
	
	
	// DISPLAY THE NEW TABLE
	$query = "SELECT song, dateAdded, timeAdded FROM songList";
	$result = mysqli_query($conn1, $query);
	$rowCount = mysqli_num_rows($result);
	echo "<table>";
	echo "<tr><th>Song</th><th>Date Added</th><th>Time Added</th></tr>";
	$i=0;
	for($i=0; $i < $rowCount; $i++) {
		$row = mysqli_fetch_row($result);
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conn1);	
	echo "<p><a href='./index.php'>Back to Week 14 Homepage</a></p>";
?>
<hr/>
</body>
</html>