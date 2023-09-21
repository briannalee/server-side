<?php
	$valueA = rand();
	$valueB = getrandmax();

	echo "<p>Random number with no arguments is $valueA</p>";
	echo "<p>The largest value this returns is $valueB</p>";

	$valueA = number_format($valueA);
	$valueB = number_format($valueB);

	echo "<p>Random number with formatting is $valueA</p>";
	echo "<p>Random number with formatting is $valueB</p>";

	$valueC = rand(1,6);
	$valueD = rand(0,2);
	$valueE = rand((getrandmax() - 3), getrandmax());

	echo "<p>Six sided die result is $valueC</p>";
	echo "<p>0, 1, 2 result is $valueD</p>";
	echo "<p>Very large result is $valueE</p>";

	$valueF = lcg_value();
	$valueG = lcg_value();
	$valueH = (10*lcg_value());

	echo "<p>First random lcg number is $valueF</p>";
	echo "<p>Second random lcg number is $valueG</p>";
	echo "<p>Third random lcg number time 10 is $valueH</p>";
