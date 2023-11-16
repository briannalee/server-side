<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week13');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}


echo "<h2>Displaying Unique Artists</h2>";
$query = "SELECT DISTINCT artist FROM song";
$result = mysqli_query($conn1, $query);
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>Unique Artists in Song Database</th></tr></thead>";
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


echo "<h2>Displaying Unique Albums</h2>";
$query = "SELECT DISTINCT album FROM song";
$result = mysqli_query($conn1, $query);
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>Unique Albums in Song Database</th></tr></thead>";
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

echo "<h2>Displaying first 20 songs in Alphabetical order</h2>";
$query = "SELECT song, artist, album FROM song ORDER BY song ASC LIMIT 20";
$result = mysqli_query($conn1, $query);
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>Song</th><th>Artist</th><th>Album</th></tr></thead>";
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



mysqli_close($conn1);
echo "<p><a href='./index.php'>Back to Week 13 Homepage</a></p>";

?>
<hr />
</body>

</html>