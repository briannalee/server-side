<?php
  $backgroundColor = $_COOKIE['bgColor'];
  echo "<script> document.body.style='background-color: " . $backgroundColor . ";'</script>";

  echo "<p>Background color was set using a Cookie</p>";

  echo "<p>Welcome back " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</p>";  
  echo "<p>Our records show you live in " . $_SESSION['city'] . ", " . $_SESSION['state'] . "</p>";