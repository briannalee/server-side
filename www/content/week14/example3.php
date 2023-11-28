<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week14');

$conn1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn1) {
  die("<p>Connection Failed! Error is " . mysqli_connect_error() . "</p>");
}

// DISPLAY ALL SONGS
// SHOW ALL
echo "<h2>Seconds</h2>";

$query = "SELECT * FROM songList";

$result = mysqli_query($conn1, $query);
$field_count = mysqli_num_fields($result);
$row_count = mysqli_num_rows($result);
$idArray = array();
$durationArray = array();
$secondsArray = array();
// Print out the rows from mysql query results using a for loop, with bootstrap table for formatting
echo "<table class='table table-striped table-bordered table-hover'><thead><tr>";
// Echo out the headers for the table from the field names in the result
for ($i = 0; $i < $field_count; $i++) {
  $field_info = mysqli_fetch_field($result);
  echo "<th>" . $field_info->name . "</th>";
}

echo "</tr></thead>";

//Go back to the first row of the result
mysqli_data_seek($result, 0);

echo "<tbody>";
for ($i = 0; $i < $row_count; $i++) {
  $row = mysqli_fetch_row($result);
  // Echo out row, formatted with bootstrap classes to align data in columns
  echo "<tr>";
  for ($j = 0; $j < $field_count; $j++) {
    echo "<td>" . $row[$j] . "</td>";
  }
  $idArray[$i] = $row[0];
  $durationArray[$i] = $row[5];
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";


//var_dump($idArray);
//var_dump($durationArray);

//Determine the total seconds for each duration value
for ($i = 0; $i < $row_count; $i++) {
  $duration = $durationArray[$i];
  $duration = explode(":", $duration);
  $secondsArray[$i] = ($duration[0] * 60) + $duration[1];
  echo "<p>The string value of song ID: $idArray[$i] is string: $durationArray[$i] is $secondsArray[$i] in seconds.</p>";
}

mysqli_close($conn1);
?>
<hr />
</body>

</html>