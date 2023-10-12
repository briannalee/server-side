<?php
  $backgroundColor = $_POST['backgroundColor'];
  echo "<script> document.body.style='background-color: " . $backgroundColor . ";'</script>";

  echo "<p>Background color was set using the POST method</p>";

  echo "<p>Welcome back " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</p>";  
  echo "<p>Our records show your age is currently " . $_SESSION['age'] . "</p>";

  echo "<p>Writing the cookie now</p>";
  $time = time();
  setcookie('bgColor', $backgroundColor, $time + 60,'/');
  echo "<p><a href='/weeks/8/example6e'>Link to Example6E</a></p>";