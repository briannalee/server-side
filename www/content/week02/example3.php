<?php
echo "This string contains no HTML";
echo "<br/>";
echo "<h1>This string uses an <code>h1</code> tag</h1>";
echo "<p>This string uses a <code>p</code> tag</p>";

//Used ' instead of " for inline CSS
echo "<p style='color:red;'>This string uses a <code>p</code> tag with inline CSS</p>";
echo "<p>This next line contains the variables and uses the . symbol to concat</p>";
echo "<p>The first name is " . $firstName . " while the last name is " . $lastName . "</p>";

