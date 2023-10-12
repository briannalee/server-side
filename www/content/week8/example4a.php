<?php
$_SESSION['firstName'] = "Brianna";
$_SESSION['lastName'] = "Ragsdale";
$_SESSION['city'] = "Saint Paul";

echo "<p>The firstName variable is now set to ".$_SESSION['firstName']."</p>";
echo "<p>The lastName variable is now set to ".$_SESSION['lastName']."</p>";
echo "<p>The city variable is now set to ".$_SESSION['city']."</p>";
echo "<p><a href='/weeks/8/example4b'>Link to Sessions Example B</a></p>";