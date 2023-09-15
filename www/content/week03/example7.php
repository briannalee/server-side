<?php
$age1 = 25;
$age2 = 30;
$age3 = 47;

echo "<p>The current value of \$age1 is $age1</p>";
echo "<p>Increment \$age1 now</p>";
$age1++;
echo "<p>The current value of \$age1 is $age1</p>";
$result1 = $age2 + $age3;
echo "<p>The sum of $age2 and $age3 is $result1</p>";

$isMonday = true;
if ($isMonday) {
	echo "<p>Today is Monday</p>";
}

if ($age1 < $age2) {
	echo "<p>$age1 is less than $age2</p>";
} else {
	echo "<p>$age1 is not less than $age2</p>";
}

$month = "July";
$date = 4;
echo "<hr/><p>";
if (($month == "December") && ($date == 25)) {
	echo "Merry Christmas!";
} elseif (($month == "July") && ($date == 4)) {
	echo "Happy Fourth of July!";
} elseif (($month == "February") && ($date == 14)) {
	echo "Happy Valentine's Day!";
} else {
	echo "Nothing happening on $month $date!";
}
echo "</p>";

$month = "November";

if (($month == "June") || ($month == "July") || ($month == "August")) {
	echo "<p>It's summertime!</p>";
} else {
	echo "<p>School is in session.</p>";
}


$string1 = "It was the best of times, ";
echo "<p>$string1</p>";
$string2 = "it was the worst of times.";
echo "<p>$string2</p>";
$string1 .= $string2;
echo "<p>$string1</p>";


$username = "brianna";
$password = "topsecret";
if (($username == "brianna") && ($password == "topsecret")) {
	echo "<p>Welcome $username!</p>";
} else {
	echo "<p>Sorry, you are not authorized to view this page.</p>";
}
