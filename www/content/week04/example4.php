
<div class="row">
    <div class="container m-auto col-sm-6">
        <form action="/weeks/week04/Example4Response" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Enter your information in the form below:</legend>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="40">
                </div>
                <div class="mb-3">
                    <label for="image1" class="form-label">Image To Upload:</label>
                    <input type="file" class="form-control" id="image1" name="image1">
                </div>
            </fieldset>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">Submit My Information</button>
            </div>
        </form>
    </div>
</div>