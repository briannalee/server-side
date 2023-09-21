<p>The current date on the server is:</p>
<?php
echo date("Y/m/d") . "<hr/><ul>";
for ($i=1; $i<6; $i++) {
	echo "<li><a href='/weeks/" . $_GET['week'] . "/example" . $i ."'>Example $i</a></li>";
}
echo "</ul>";