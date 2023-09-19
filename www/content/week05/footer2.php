
<style>
	#footerBox { 	background-color:	lightblue;
					width:				800px;
					height:				100px;
					border:				solid black 5px;}
	#footerBox p {	color:				red;
					text-align:			center;
					font-size:			1em; }
</style>
<div id="footerBox">
	<!-- FOOTER CONTENT GOES HERE -->
	<?php
		$year = date("Y");
		$string1 = "Copyright " . $year . " ";
		$string1 .= "<i class='fa fa-copyright h6'></i>";
		echo "<p>$string1</p>";
	?>
</div>