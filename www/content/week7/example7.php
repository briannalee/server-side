<?php
$file = fopen("./content/week7/pageHitCounter.txt","r");
$hitCount = fgets($file);
fclose($file);
echo "<p>Previously, this page was accessed $hitCount times</p><hr/>";

$hitCount++;

$file = fopen("./content/week7/pageHitCounter.txt","w");
fwrite($file, $hitCount);
fclose($file);
echo "<p>This page has now been accessed $hitCount times</p>";