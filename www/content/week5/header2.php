<div class="row mb-3">
	<div class="card">
		<div class="card-body text-center">
			<?php
			date_default_timezone_set("America/Chicago");
			$weekDay = date("l");
			$month = date("F");
			$dateNumber = date("jS");
			$string1 = $weekDay . ", " . $month . " " . $dateNumber;
			echo "<p>Today is " . $string1 . "</p>";
			?>
		</div>
	</div>
</div>