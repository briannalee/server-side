<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week13');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}

// DISPLAY ALL OCCURRENCES WHEN album = 'Led Zepplin 4'
echo "<h2>Displaying Incorrect Album Name</h2>";
$query = "SELECT id, album, artist  FROM song WHERE album = 'Led Zepplin 4'";
$result = mysqli_query($conn1, $query);
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Album</th><th>Artist</th></tr></thead>";
echo "<tbody>";

// GET UNIQUE RECORD ID FOR FIRST PASS THROUGH THE FOR LOOP
$row = mysqli_fetch_assoc($result);
$id2Remove = $row['id'];
// Go back to start
mysqli_data_seek($result, 0);

echo "<h2>The Old Table is below:</h2>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	foreach ($row as $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</table>";

// DISPLAY THE UNIQUE RECORD ID TO UPDATE
echo "<p>The unique IDs to remove from the table is " . $id2Remove . "</p>";

// PERFORM THE UPDATE QUERY to change the album name
$query = "UPDATE song SET album = 'Led Zeppelin 4' WHERE id = " . $id2Remove;
$result = mysqli_query($conn1, $query);

// DISPLAY ALL REMAINING OCCURANCES WHEN album = 'Led Zepplin 4'
echo "<h2>The New Table is below:</h2>";
$query = "SELECT id, album, artist  FROM song WHERE album = 'Led Zepplin 4'";
$result = mysqli_query($conn1, $query);
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Album</th><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	foreach ($row as $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</table>";


mysqli_close($conn1);


?>