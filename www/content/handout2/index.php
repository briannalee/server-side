<div class="row">
	<div class="container m-auto col-sm-6">
		<form action="/weeks/handout2/imageUpload" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Please upload three (3) images:</legend>
				<div class="mb-3">
					<label for="image1" class="form-label">Image 1 To Upload:</label>
					<input type="file" class="form-control" id="image1" name="image1">
				</div>
				<div class="mb-3">
					<label for="image1" class="form-label">Image 2 To Upload:</label>
					<input type="file" class="form-control" id="image2" name="image2">
				</div>
				<div class="mb-3">
					<label for="image1" class="form-label">Image 3 To Upload:</label>
					<input type="file" class="form-control" id="image3" name="image3">
				</div>
			</fieldset>
			<div class="d-grid gap-2 text-center">
				<button type="submit" class="btn btn-primary" name="submit">Customize Images</button>
			</div>
		</form>
	</div>
</div>