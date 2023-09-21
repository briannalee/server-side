<?php
echo "<div class='row'>";

if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
	echo "<p>Thank you, <strong>" . $_POST['name'] . "</strong>, for the following comments:</p><p>";
	echo $_POST['comments'];
	echo "</p><p>We will reply to you at <em>" . $_POST['email'] . "</em>.</p>";
} else { // Invalid form input
	echo "<p>Please go back and fill out the form again.</p>";
	echo "<p><a href='./Week4-Example1.html'><BACK</a></p>";
}
echo "</div>";
