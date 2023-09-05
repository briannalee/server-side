<?php
include '../environment.php';
$pageTitle = 'Homepage for Week 2';
include '../header.php';
echo "<h1>$pageTitle</h1>";
print("<p>Welcome to the Week 2 Homepage</p>");
?>
<hr />
<p>The current date on the server is:</p>
<?php
echo date("Y/m/d");
?>
<hr />
<p>Link to <a href="./Week2-Example1.php">Week2-Example1</a> file</p>
<p>Link to <a href="./Week2-Example2.php">Week2-Example2</a> file</p>
<p>Link to <a href="./Week2-Example3.php">Week2-Example3</a> file</p>
<p>Link to <a href="./Week2-Example4.php">Week2-Example4</a> file</p>
<p>Link to <a href="./Week2-Example5.php">Week2-Example5</a> file</p>
<?php include '../footer.php'; ?>