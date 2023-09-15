<?php
$baseballTeams = array("Twins", "Red Sox", "Yankees", "Brewers", "Cubs", "Mets", "Dodgers", "Cardinals", "Astros", "Giants");
$baseballLength = count($baseballTeams);
echo "<p>The total number of teams is " . $baseballLength . "</p>";
echo "<p>The first team is " . $baseballTeams[0] . "</p>";
echo "<p>The last team is " . $baseballTeams[$baseballLength - 1] . "</p>";
echo "<p>The entire array is:</p><p>";
print_r($baseballTeams);
echo "</p>";
echo "<hr/>";

// Pop
array_pop($baseballTeams);
echo "<p>The entire array after popping is:</p><p>";
print_r($baseballTeams);
echo "</p>";
echo "<hr/>";

array_shift($baseballTeams);
echo "<p>The entire array after shifting is:</p><p>";
print_r($baseballTeams);
echo "</p>";
echo "<hr/>";

// Search Array
$result1 = array_search("Brewers", $baseballTeams);
echo "<p>The index associated with Brewers is $result1</p>";
echo "<hr />";

// Search Array for invalid 
$result2 = array_search("Marlins", $baseballTeams);
echo "<p>The index associated with Marlins is $result2</p>";
echo "<hr />";

//Reverse the array
$teamsReversed = array_reverse($baseballTeams);
echo "The array backwards is:</p><p>";
print_r($teamsReversed);
echo "</p><hr />";
