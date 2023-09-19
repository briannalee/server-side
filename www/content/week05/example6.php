<!-- SECTION A - HEADER -->
<?php

?>

<!-- SECTION B - FORM INPUT -->
<h1>Retirement Calculator</h1>


<!-- SECTION C - ONLY DISPLAY IF GOOD INPUT RECEIVED -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$amountSaved = $_POST['currentAmount'];
	$interest = $_POST['rate'];
	$yearsRemaining = $_POST['yearsLeft'];

	if (is_numeric($amountSaved) && is_numeric($interest) && is_numeric($yearsRemaining)) {
		$newRate = 1 + ($interest / 100);
		$result = $amountSaved * $newRate ** $yearsRemaining;
		echo 	"<p> In $yearsRemaining years, at an interest rate of $interest%</p>
					<p> $$amountSaved will compound to " . round($result) . " in savings.</p>";

		// Do not print out input form if user's input was good
		return;
	} else {
		echo "<span class='row bg-danger'>Error! Please check your form values.</span>";
	}
}
?>


<div class="row">
	<div class="container m-auto col-md-12">
		<form action="/weeks/week05/example6" method="post">
			<fieldset>
				<legend>Enter your information in the form below:</legend>
				<div class="mb-3 row">
					<div class="col-md-4">
						<label for="currentAmount" class="form-label">Current Amount Saved</label>
					</div>
					<div class="col-md-8">
						<input type="number" class="form-control" id="currentAmount" name="currentAmount" maxlength="10" required>
					</div>
				</div>
				<div class="mb-3 row">
					<div class="col-md-4">
						<label for="rate" class="form-label">Interest Rate</label>
					</div>

					<div class="col-md-8 ">
						<input type="number" class="form-control" id="rate" name="rate" maxlength="3" required>
						<span>Enter 8 for 8%, 10 for 10%, etc</span>


					</div>
				</div>
				<div class="mb-3 row">
					<div class="col-md-4">
						<label for="yearsLeft" class="form-label">Years to Retirement</label>
					</div>
					<div class="col-md-8">
						<input type="number" class="form-control" id="yearsLeft" name="yearsLeft" required>
					</div>
				</div>
			</fieldset>
			<div class="text-center row">
				<button type="submit" class="btn btn-primary" name="submit">Calculate</button>
			</div>
		</form>
	</div>
</div>