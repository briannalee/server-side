<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week13');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}

echo "<h2>The Old Table is below:</h2>";
$query = "SELECT id, album, artist, song FROM song WHERE album LIKE 'One' ";
$result = mysqli_query($conn1, $query);
$idArray = array();
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Album</th><th>Artist</th></tr></thead>";
echo "<tbody>";

while ($row = mysqli_fetch_assoc($result)) {
	$idArray[] = $row['id'];
	echo "<tr>";
	foreach ($row as $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</table>";

// LIST THE VALUES OF THE idArray IN A FOR LOOP HERE
echo "<p>The array of unique IDs to remove from the table is:</p>";
foreach ($idArray as $value) {
	echo " " . $value;
}

// UPDATE THE album VALUE CORRESPONDING TO EACH idArray HERE
// ADD CODE HERE - Use UPDATE to change album name to 'Led Zeppelin IV' with a loop
foreach ($idArray as $value) {
	$query = "UPDATE song SET album = '1' WHERE id = " . $value;
	$result = mysqli_query($conn1, $query);
}

echo "<hr />";

echo "<p>The entire updated table is:</p>";

echo "<h2>The New Table is below:</h2>";
$query = "SELECT id, album, artist  FROM song WHERE album = '1'";
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

echo "<p><a href='./index.php'>Back to Week 13 Homepage</a></p>";

?>
<hr />
</body>

</html>