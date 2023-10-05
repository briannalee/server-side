<?php
function readTextFile($path)
{
	$file = fopen($path, "r");

	for ($i = 0; $i < 4; $i++) {
		$shortList = fread($file, 40);
		echo "<p>The next 40 bytes of the team list is:<span class='bg-primary text-white'>$shortList</span></p>";
	}
	fclose($file);
}

$path = "./content/week7/teamList1.txt";
readTextFile($path);

echo "<hr/>";

$file = fopen($path,'r');
$fileSize1 = filesize($path);
echo "<p>There are a total of <span class='bg-primary text-white'>$fileSize1</span> characters in the team list</p>";
$longList = fread($file,$fileSize1);
echo "<p>The entire team list is: <span class='bg-primary text-white'>$longList</span></p>";
fclose($file);
echo "<hr/>";

$file = fopen($path,'r');
$longList = fread($file,filesize($path));
echo "<p>The entire team list is: <span class='bg-primary text-white'>$longList</span></p>";
fclose($file);
echo "<hr/>";