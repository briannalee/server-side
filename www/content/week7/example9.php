<?php

/**
 * If post, handle form
 */
$filePath = './content/week7/quoteCollection1.txt';
if (isset($_POST['newQuote'])) {
  $newQuote = $_POST['newQuote'] . "\n"; // Get form data

  // Echo quote
  echo "<p>The new quote to be appended to the file is: <span class='bg-primary'>$newQuote</span></p>";

  // Write to file
  $file = fopen($filePath, 'a');
  fwrite($file, $newQuote);
  fclose($file);
}

/**
 * Read file, echo data with row styling
 */
$style2 = 'text-dark bg-success'; // Odd styling
$style1 = 'text-light bg-dark'; //  Even styling
$file = fopen($filePath, 'r');
$numberOfLines = count(file($filePath));

echo  "<h5>There are a total of $numberOfLines lines in this file:</h5>
        <div class='list-group'>";

// Table rows
for ($i = 0; $i < $numberOfLines; $i++) {
  $line = fgets($file); // Read line
  $style = $i % 2 ? $style1 : $style2; // Alternate styling
  // Echo row
  echo "<span class='" . $style . " list-group-item'>Line " . $i + 1 . ": $line</span>";
}
echo "</div>";
fclose($file);
?>

<button type="button" class="btn btn-primary w-100 mt-4" id="all" data-bs-toggle="collapse" data-bs-target="#quoteAdd" aria-expanded="false" aria-controls="quoteAdd">
  Add Quote
</button>

<div class="collapse" id="quoteAdd">
  <div class="card card-body">
    <form action="/weeks/7/example9" method="post">
      <fieldset>
        <legend>Add your own quote:</legend>
        <div class="form-group">
          <textarea class="form-control mb-3" name="newQuote" rows="4"></textarea>
        </div>
      </fieldset>
      <input type="submit" name="submit" class="btn btn-success" value="Add Quote">
    </form>
  </div>
</div>