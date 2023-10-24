<?php 
echo "<p>The firstName variable is still set to ".$_SESSION['firstName']."</p>";
echo "<p>The lastName variable is still set to ".$_SESSION['lastName']."</p>";
echo "<p>The city variable is still set to ".$_SESSION['city']."</p>
      <p>Time to destroy everything</p>";
session_destroy();
echo "<p><a href='/weeks/8/example4d'>Link to Sessions Example D</a></p>";