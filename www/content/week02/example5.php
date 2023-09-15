<?php
  echo '<p>Displaying Server Variables - SUPERGLOBALS</p>';
  
  $fullPathInfo = $_SERVER['SCRIPT_FILENAME'];
  $serverPathInfo = $_SERVER['PHP_SELF'];
  $hostInfo = $_SERVER['HTTP_HOST'];
  $userInfo = $_SERVER['HTTP_USER_AGENT'];
  $serverInfo = $_SERVER['SERVER_SOFTWARE'];

  echo "<p>The full path to this file is $fullPathInfo</p>";
  echo "<p>The server path to this file is $serverPathInfo</p>";
  echo "<p>The host is set to $hostInfo</p>";
  echo "<p>You are using $userInfo</p>";
  echo "<p>The serer is running $serverInfo</p>";
  
  echo "<p> A complete reference can be found at <a href='https://www.w3schools.com/php/php_superglobals.asp'>W3Schools</a></p>";
