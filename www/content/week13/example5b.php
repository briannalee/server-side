<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week13');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}

// Get form data from $_POST array
$selection = $_POST['selection'];

echo "<p>The result requested is $selection</p>";

$query = "";
$pageTitleQuery = "";
$tableHeading = "";

// Use switch statement to determine which query to use based on user selection
switch ($selection) {
	case 'topReading':
		$query = "SELECT uniqueID, country, reading FROM rankings
		          ORDER BY reading DESC Limit 10";
		$pageTitleQuery

			= "Top 10 Reading Results";
		$tableHeading = "Reading";
		break;

	case 'bottomReading':
		$query = "SELECT uniqueID, country, reading FROM rankings
		          ORDER BY reading ASC Limit 10";
		$pageTitleQuery

			= "Bottom 10 Reading Results";
		$tableHeading = "Reading";
		break;

	case 'topMath':
		$query = "SELECT uniqueID, country, math FROM rankings
		          ORDER BY math DESC Limit 10";
		$pageTitleQuery

			= "Top 10 Math Results";
		$tableHeading = "Math";
		break;

	case 'bottomMath':
		$query = "SELECT uniqueID, country, math FROM rankings
		          ORDER BY math ASC Limit 10";
		$pageTitleQuery

			= "Bottom 10 Math Results";
		$tableHeading = "Math";
		break;

	case 'topScience':
		$query = "SELECT uniqueID, country, science FROM rankings
		          ORDER BY science DESC Limit 10";
		$pageTitleQuery

			= "Top 10 Science Results";
		$tableHeading = "Science";
		break;

	case 'bottomScience':
		$query = "SELECT uniqueID, country, science FROM rankings
		          ORDER BY science ASC Limit 10";
		$pageTitleQuery

			= "Bottom 10 Science Results";
		$tableHeading = "Science";
		break;
	default:
		$query = "SELECT uniqueID, country, reading FROM rankings
						ORDER BY reading DESC Limit 10";
		$pageTitleQuery

			= "Top 10 Reading Results";
		$tableHeading = "Reading";
		break;
}

/*
		DEFINE $query, $pageTitleQuery
	
	and $tableHeading here
	*/

echo "<h3>$pageTitleQuery</h3>";

$result = mysqli_query($conn1, $query);


// Print out the rows from the query results using a while loop
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Country</th><th>$tableHeading</th></tr></thead>";
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
