<?php
$baseballTeams = array("Twins", "Red Sox", "Yankees", "Brewers", "Cubs", "Mets");
echo "<p>The total number of teams in the baseball array is " . count($baseballTeams) . "</p>";
echo "<p>The first team is $baseballTeams[0]</p>";
echo "<p>The first team is $baseballTeams[5]</p>";
echo "<p>The entire array is:</p></p>";
print_r($baseballTeams);
echo "</p><hr />";

// Array creation - Method 2
$footballTeams[0] = "Vikings";
$footballTeams[1] = "Packers";
$footballTeams[2] = "Lions";
$footballTeams[4] = "Bears";
$footballTeams[5] = "Buccaneers";

echo "<p>The total number of teams in the football array is " . count($footballTeams) . "</p>";
echo "<p>The first team is $footballTeams[0]</p>";
echo "<p>The first team is $footballTeams[5]</p>";

// This will generate errors
echo "<p>The fourth team is . $footballTeams[3] </p>";
echo "<p>The entire array is:</p></p>";
print_r($footballTeams);
echo "</p><hr />";
