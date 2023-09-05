<?php
	include '../environment.php';
  $pageTitle = 'Week02 - Example 4';
  include '../header.php';
	echo "<h1>$pageTitle</h1>";

  echo '<h3>Displaying time and date in different formats</h3>';
  
  //Note the use of ' inside the date() command
  echo "<p>Date format 1: " . date('m/d/Y') . "</p>";
  echo "<p>Date format 2: " . date('l, F ds, Y') . "</p>";

  $timezone1 = date_default_timezone_get();
  echo "<p>The current timezone is set to " . $timezone1 . "</p>";
  echo "<p>Time format 1: " . date('h:i:sa') . "</p>";

  date_default_timezone_set('America/Chicago');
  $timezone2 = date_default_timezone_get();
  echo "<p>Just rest the timezone to " . $timezone2 . "</p>";
  echo "<p>Time Format 2: " . date('h:i:sa') . "</p>";
	?>
<?php include '../footer.php'; ?>
