<?php
	include '../environment.php';
	$pageTitle = 'Week 4 - Upload Files';
	include '../header.php';
?>


<form>
	<fieldset>

		<legend>Enter your information in the form below:</legend>
		<p>
			<label>Name: <input type="text" name="name" size="20" maxlength="40"></label>
		</p>
		<p>
			<label>Image To Upload: <input type="file" name="image1"></label>
		</p>

	</fieldset>
	<p style="text-align: center;">
		<input type="submit" name="submit" value="Submit My Information">
	</p>

</form>
<?php include "../footer.php"; ?>