<?php
echo "<div class='row'><div class='col-sm-12'>";	
echo "<p>Thanks for submitting your info " . $_POST['name'] . "</p>";

$baseName = $_FILES['image1']['name'];
$fileSize = $_FILES['image1']['size'];
$fileType = $_FILES['image1']['type'];

echo "<p>The base file name is $baseName</p>";
echo "<p>The file size is $fileSize</p>";
echo "<p>The file type is $fileType</p>";

$sourceFile = $_FILES['image1']['tmp_name'];
$destinationFolder = getcwd() . "/";
$destinationFile = $destinationFolder . $baseName;

echo "<p>The uploaded file is originally stored in $sourceFile";
echo "<p>The copy command will move it to $destinationFile";
@copy($sourceFile, $destinationFile);

echo "<p>Image displayed below:</p>";
//echo "<img src='$destinationFile' alt='Uploaded Image 1' />";
echo "<img src='$baseName' alt='Uploaded Image 1' />";
echo "</div></div>";
