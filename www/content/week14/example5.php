<?php 

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'week14');

	$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$conn1) {
		die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
	} 
	
	// SHOW ALL SONGS IN songList2 WHERE album LIKE 'Tattoo You'
	// STORE ID FOR EACH IN ARRAY CALLED $idArray
	echo "<h2>Show all Tattoo You Songs in songlist - Version 2</h2>";
	$query = "SELECT id, album, artist, song FROM songList2 WHERE album LIKE 'Tattoo You' ";
	$result = mysqli_query($conn1, $query);
	$rowCount = mysqli_num_rows($result);
	echo "<table>";
	echo "<tr><th>ID</th><th>ALBUM</th><th>ARTIST</th><th>SONG</th></tr>";
	$i=0;
	$idArray = array();
	for($i=0; $i < $rowCount; $i++) {
		$row = mysqli_fetch_row($result);
		$idArray[$i] = $row[0];
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	// USE $idArray AND FOR LOOP TO DELETE BY UNIQUE ID FROM songList2
	for($i=0; $i < $rowCount; $i++) {
		$query = "DELETE FROM songList2 WHERE id = " . $idArray[$i];
		$result = mysqli_query($conn1, $query);
		if($result) {
			echo "<p>Record " . $idArray[$i] . " deleted successfully.</p>";
		} else {
			echo "<p>Record " . $idArray[$i] . " not deleted.</p>";
		}
	}


	
	// SHOW ALL SONGS ORDERED BY ALBUM IN songListv2
	echo "<h2>Show all Songs in songlist - Version 2</h2>";
	$query = "SELECT id, album, artist, song FROM songList2 ORDER BY album ASC";
	$result = mysqli_query($conn1, $query);
	$rowCount = mysqli_num_rows($result);
	echo "<table>";
	echo "<tr><th>ID</th><th>ALBUM</th><th>ARTIST</th><th>SONG</th></tr>";
	$i=0;
	$idArray = array();
	for($i=0; $i < $rowCount; $i++) {
		$row = mysqli_fetch_row($result);
		$idArray[$i] = $row[0];
		echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
		echo "<td>" . $row[2] . "</td>";
		echo "<td>" . $row[3] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conn1);	
	echo "<p><a href='./index.php'>Back to Week 14 Homepage</a></p>";
?>