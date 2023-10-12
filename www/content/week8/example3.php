
<?php

$stringA = "John,Bill,Fred,George,Harry,Ron,David";
$arrayB = explode(",",$stringA);
$i;

for ($i=0; $i < sizeof($arrayB); $i++) {
	echo "<p>Element $i is equal to $arrayB[$i]</p>";
}
echo "<hr/>";

$arrayC = ["Brenda", "Steph", "Jill", "Laurie", "Dawn"];
$stringD = implode(":", $arrayC);
echo "<p>The new string is \"$stringD\"</p><hr/>";

$numericE = pi();
printf("<p>Value of pi with unsigned decimal notation is %u</p>",$numericE);
printf("<p>Value of pi with scientific notation is %e</p>",$numericE);
printf("<p>Value of pi with floating point default is %f</p>",$numericE);
printf("<p>Value of pi with floating point to 5 places is %0.5f</p>",$numericE);
printf("<p>Value of pi with floating point to 10 places is %0.10f</p>",$numericE);
printf("<p>Value of pi with floating point to 15 places is %0.15f</p>",$numericE);