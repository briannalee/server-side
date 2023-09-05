<?php
include '../environment.php';
$pageTitle = 'Homepage for Week 3';
include '../header.php';
echo "<h1>$pageTitle</h1>";
?>
<div id="box1">
		<h2>Week 3 Examples</h2>
		<p><a href="./Week3-Example1.php">Server Variables</a></p>
		<p><a href="./Week3-Example2.php">Constants</a></p>
		<p><a href="./Week3-Example3.php">Indexed Arrays - Part 1</a></p>
		<p><a href="./Week3-Example4.php">Indexed Arrays - Part 2</a></p>
		<p><a href="./Week3-Example5.php">Associative Arrays</a></p>
		<p><a href="./Week3-Example6.php">Single and Double Quotes</a></p>
		<p><a href="./Week3-Example7.php">Conditionals and Operators</a></p>
		<p><a href="./Week3-Example8.php">Form with GET</a></p>
		<p><a href="./Week3-Example9.php">Form with POST</a></p>
		<a class="btn btn-primary" href="../index.php">Return Home</a>
</div>
<?php include '../footer.php'; ?>