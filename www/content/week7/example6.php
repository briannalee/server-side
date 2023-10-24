<?php
$file = fopen('./content/week7/teamList1.txt',"r");
for ($i=0; $i < 3; $i++) { 
  $string = fgets($file);
  $line = $i+1;
  echo "<p>Line number $line line is $string</p>";
}
fclose($file);

echo "<hr/>";

$file = fopen('./content/week7/teamList1.txt',"r");
$lines = count(file('./content/week7/teamList1.txt'));
echo "<p>There are a total of $lines in this file<p>";

for ($i=0; $i < $lines; $i++) { 
  $string = fgets($file);
  $line = $i+1;
  echo "<p>Line number $line line is $string</p>";
}
fclose($file);