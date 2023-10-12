
<?php 
	$stringA = "Saint Paul College";
	$stringB = "To be or not to be, THAT IS THE QUESTION";
	
	$lengthA = strlen($stringA);
	$lengthB = strlen($stringB);

	$wordsA = str_word_count($stringA);
	$wordsB = str_word_count($stringB);

	echo "<p>There are $lengthA characters and $wordsA words in:</p><p>$stringA</p><hr/>";
	echo "<p>There are $lengthB characters and $wordsB words in:</p><p>$stringB</p><hr/>";

	echo "<p>Displaying the the first string in uppercase:</p>";
	echo "<p>" . strtoupper($stringA) . "</p>";
	echo "<p>Displaying the the second string in uppercase:</p>";
	echo "<p>" . strtoupper($stringB) . "</p>";
	echo "<p>The value of stringA is $stringA</p><p>Converting</p>";
	$stringA = strtoupper($stringA);
	echo "<p>The value of stringA is now $stringA</p><hr/>";

	$positionA = strpos($stringA, "PAUL");
	echo "<p>The position of PAUL in $stringA is $positionA</p>";

	$count1 = substr_count($stringB, "be");
	//Note the use of backslash to display quote symbol
	echo "<p>There are $count1 occurrences of \"be\" in $stringB</p>";
	$positionB1 = strpos($stringB,"be");
	echo "<p>The first occurrence of \"be\" is at $positionB1</p>";
	$tempString = substr($stringB, ($positionB1 + 1));
	echo "<p>The temp string is $tempString</p>";
	// Note formula below
	$positionB2 = strpos($tempString, "be") + $positionB1 +1;
	echo "<p>The second occurrence of \"be\" is at $positionB2</p><hr/>";

?>
