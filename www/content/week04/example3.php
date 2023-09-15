<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<form action="/weeks/week04/Example3Response" method="post">
	<fieldset class="row">
		<legend>Enter your information in the form below:</legend>
		<div class="form-group">
			<div class="col-auto">
				<label for="inputName" class="col-form-label">Name: </label>
			</div>
			<div class="col-auto">
				<input type="text" class="form-control" name="name" size="20" maxlength="40" id="inputName">
			</div>
		</div>
	</fieldset>

	
	<script>
		var width1 = $(document).width();
		var height1 = $(document).height();
		var platform1 = navigator.platform;
		var browser1 = navigator.userAgent;
		var string1 = "<p>Your screen width is " + width1 + "</p>";
		string1 += "<p>Your screen height is " + height1 + "</p>";
		string1 += "<p>Your OS is set to " + platform1 + "</p>";
		string1 += "<p>Your browser is set to " + browser1 + "</p>";
		console.log("The information in string1 is listed below");
		console.log(string1);
		document.write("<input type='hidden' name='clientInfo' value='" + string1 + "'>");
	</script>
	<input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>