<?php
	include '../environment.php';
	$pageTitle = 'Week 3 - Single and Double Quotes';
	include '../header.php';
	
		
		$baseballTeams = array("Twins", "Red Sox", "Yankees", "Brewers", "Cubs", "Mets");
		echo "<p>I like to watch the $baseballTeams[0] on TV</p>";
		echo '<p>I like to watch the $baseballTeams[0] on TV</p>';
		
		echo "<p>I avoid watching the $baseballTeams[3] on TV</p>";
		echo '<p>I avoid watching the $baseballTeams[3] on TV</p>';
		
		include("../footer.php");
