<?php
$filePath = './content/week7/quoteCollection1.txt';
$file = fopen($filePath, 'r');
$numberOfLines = count(file($filePath));
echo "<p>There are a total of $numberOfLines in this file</p>";
for ($i = 0; $i < $numberOfLines; $i++) {
  $line = fgets($file);
  $lineNum = $i + 1;
  echo "<p>Line $lineNum: $line</p><hr/>";
}
fclose($file);
?>
<h1>Add your own quote</h1>

<div class="row">
  <form action="/weeks/7/example8b" method="post">
    <fieldset>
      <legend>Add your own quote</legend>
      <div class="form-group">
        <label>New Quote:</label>
        <textarea class="form-control" name="newQuote" rows="4" cols="50"></textarea>
      </div>
    </fieldset>

    <input type="submit" name="submit" class="btn btn-primary" value="Add Quote">

  </form>
</div>