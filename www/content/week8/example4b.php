<?php 
echo "<p>The firstName variable is still set to ".$_SESSION['firstName']."</p>";
echo "<p>The lastName variable is still set to ".$_SESSION['lastName']."</p>";
echo "<p>The city variable is still set to ".$_SESSION['city']."</p>
      <p>Time to unset firstname</p>";
unset($_SESSION['firstName']);
echo "<p>The firstName variable is still set to ".$_SESSION['firstName']."</p>";
echo "<p>The lastName variable is still set to ".$_SESSION['lastName']."</p>";
echo "<p>The city variable is still set to ".$_SESSION['city']."</p>";

echo "<p><a href='/weeks/8/example4c'>Link to Sessions Example C</a></p>";
