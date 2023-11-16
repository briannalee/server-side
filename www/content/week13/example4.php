<?php 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'week13');
$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}else{
	echo "<p>Connection to Week 13 Database Successful!</p>";
}

$query = "SELECT uniqueID, country, reading FROM rankings
          ORDER BY country ASC Limit 10";

$query = "SELECT * FROM rankings WHERE country LIKE 's%'";

$query = "SELECT * FROM rankings WHERE country LIKE '%a' OR country LIKE '%b' OR country LIKE '%c' ORDER BY country ASC";

$query = "SELECT country, reading,math, science FROM rankings
          ORDER BY math ASC Limit 10";

$query = "SELECT country, reading,math, science FROM rankings
          ORDER BY math DESC Limit 10";

$query = "SELECT uniqueID, country ,reading FROM rankings
          WHERE reading BETWEEN 400 and 450";

$query = "SELECT country, reading, math, science FROM rankings
          WHERE country BETWEEN 'c' and 'h' ORDER BY country ASC";

$result = mysqli_query($conn1, $query);
//var_dump($result);
$row_count = mysqli_num_rows($result);
$field_count = mysqli_num_fields($result);
echo "<p>There are $row_count rows in the results table.</p><hr />";

// Print out the rows from mysql query results using a for loop, with bootstrap table for formatting
echo "<table class='table table-striped table-bordered table-hover'>";
//echo "<thead><tr><th>ID</th><th>Country</th><th>Reading Score</th></tr></thead>";
echo "<tbody>";
for ($i=0; $i < $row_count; $i++) { 
  $row = mysqli_fetch_row($result);
  // Echo out row, formatted with bootstrap classes to align data in columns
  echo "<tr>";
  for ($j=0; $j < $field_count; $j++) { 
    echo "<td>" . $row[$j] . "</td>";
  }
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";


mysqli_close($conn1);
echo "<p>Connection to Week 13 Database Closed!</p>";