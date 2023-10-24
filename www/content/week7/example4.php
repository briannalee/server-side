<?php

function readTextFile($path)
{
	$baseName = basename($path);

	if (file_exists($path)) {
		$contents = file_get_contents($path);
		$size = filesize($path);
		echo "<p>The file called $baseName contains the string $contents</p>";
		echo "<p>The number of characters in $baseName is $size</p><hr/>";
	} else {
		echo "<p class='bg-danger'>The file $baseName does not exist!</p>";
	}
}

readTextFile('./content/week7/data1.txt');
readTextFile('./content/week7/data2.txt');