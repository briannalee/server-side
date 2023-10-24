
<?php 
	$stringA = "To be or not to be, that is the question";
	$commaPos = strpos($stringA,",");
	$subString1 = substr($stringA,0,strpos($stringA,","));
	$subString2 = substr($stringA,$commaPos+2);

	echo "<p>The original string is \"$stringA\"</p>";
	echo "<p>The first part of the string is \"$subString1\"</p>";
	echo "<p>The second part of the string is \"$subString2\"</p>";

	$stringD = substr($stringA, 9, 10);
	echo "<p>Starting at position 9 and going to 10 results in \"$stringD\"</p>";

	$stringE = substr($stringA, 9, -5);
	echo "<p>Starting at position 9 and going -5 results in \"$stringE\"</p>";

	$stringE = substr($stringA, -8);
	echo "<p>Starting at position -8 results in \"$stringE\"</p>";

	$stringE = substr($stringA, -8, 5);
	echo "<p>Starting at position -8 and going to 5 results in \"$stringE\"</p>";

	$stringE = substr($stringA, -8, -5);
	echo "<p>Starting at position -8 and going to -5 results in \"$stringE\"</p>";

	$stringI = str_replace("that", "what",$stringA);
	$stringI .= "?";

	echo "<p>The updated string is \"$stringI\"</p><hr/>";