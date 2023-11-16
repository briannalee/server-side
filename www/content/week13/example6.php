<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week13');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
} else {
	echo "<p>Successfully Connected to Database: " . DB_NAME . "</p>";
}


// STEP 1 - CREATE MYSQL QUERY
$query = "SELECT id, song, artist FROM song";
$result = mysqli_query($conn1, $query);
// STEP 2 - COUNT NUMBER OF ROWS
// -- NOT NEEDED --

// STEP 3 - CREATE THE TABLE AND TR ROW WITH TABLE HEADERS
// Print out the rows from the query results using a while loop
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Song</th><th>Artist</th></tr></thead>";
echo "<tbody>";

// STEP 4 - CREATE THE FOR LOOP FOR EACH ROW	
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	foreach ($row as $value) {
		echo "<td>" . $value . "</td>";
	}
	echo "</tr>";
}

// STEP 5 - CLOSE THE TABLE TAG

echo "</tbody>";
echo "</table>";



mysqli_close($conn1);
echo "<p>Closed Database connection to " . DB_NAME . "</p>";

?>
<hr />
</body>

</html>