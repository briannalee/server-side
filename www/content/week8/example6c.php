<?php
echo "<p>Welcome back " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</p>";
echo "<p>Our records show your age is currently " . $_SESSION['age'] . "</p>";

echo "<p>Please pick a color for the background color for the next page</p>";

echo "<div class='container mt-5'>
<form method='post' action='/weeks/8/example6d'>
		<div class='mb-3'>
				<label for='backgroundColor' class='form-label'>Background Color:</label>
				<select name='backgroundColor' class='form-select'>
						<option value='purple'>Purple</option>
						<option value='green'>Green</option>
						<option value='lightblue'>Light Blue</option>
				</select>
		</div>
		<button type='submit' class='btn btn-primary'>Submit</button>
</form>
</div>";