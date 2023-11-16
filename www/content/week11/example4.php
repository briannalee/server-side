<?php 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'week11');
$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$conn1) {
	die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}else{
	echo "<p>Connection to Week 11 Database Successful!</p>";
}

$query = "SELECT * FROM ranking";
$result = mysqli_query($conn1, $query);
//var_dump($result);
$row_count = mysqli_num_rows($result);
echo "<p>There are $row_count rows in the rankings table.</p><hr />";

// Print out the rows from mysql query results using a for loop, with bootstrap table for formatting
echo "<table class='table table-striped table-bordered table-hover'>";
echo "<thead><tr><th>ID</th><th>Country</th><th>Math Score</th><th>Reading Score</th><th>Science Score</th></tr></thead>";
echo "<tbody>";
for ($i=0; $i < $row_count; $i++) { 
  $row = mysqli_fetch_assoc($result);
  // Echo out row, formatted with bootstrap classes to align data in columns
  echo "<tr><td>" . $row['uniqueID'] . "</td><td>" . $row['country'] . "</td><td>" . $row['math'] . "</td><td>" . $row['reading'] . "</td><td>" . $row['science'] . "</td></tr>";
}
echo "</tbody>";
echo "</table>";


mysqli_close($conn1);
echo "<p>Connection to Week 11 Database Closed!</p>";