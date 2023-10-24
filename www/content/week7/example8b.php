<?php
$filePath = './content/week7/quoteCollection1.txt';
$newQuote = $_POST['newQuote'] . "\n";
echo "<p>The new quote to be appended to the file is: <span class='bg-primary'>$newQuote</span></p>";
$file = fopen($filePath,'a');
fwrite($file,$newQuote);
fclose($file);


$file = fopen($filePath, 'r');
$numberOfLines = count(file($filePath));
echo "<p>There are a total of $numberOfLines in this file</p>";
for ($i = 0; $i < $numberOfLines; $i++) {
  $line = fgets($file);
  $lineNum = $i + 1;
  echo "<p>Line $lineNum: $line</p><hr/>";
}
fclose($file);