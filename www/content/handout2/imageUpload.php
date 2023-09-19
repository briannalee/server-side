<div class="row">

  <form action="/weeks/handout2/imageCustomize" method="post" enctype="multipart/form-data" class="form-inline">
    <legend>Please customize images:</legend>
    <div class="row mb-4">
      <?php
      $allowedTypes = [1, 2, 3];

      for ($i = 1; $i <= 3; $i++) {

        // Get image file from form
        $image = $_FILES['image' . $i];
        $baseName = $image['name'];
        $file = getcwd() . '/content/handout2/resources/' . $i . $baseName;

        // Copy image file to local resources directory
        @copy($image['tmp_name'], $file);
        $localPath = '/content/handout2/resources/' . $i . $baseName;

        // Get image type, and check against supported types
        $type = exif_imagetype($file);
        $error = !in_array($type, $allowedTypes);

        // Image is not a type we can deal with, error out and exit script
        if ($error) {
          echo "Please upload supported filetype (PNG, JPEG, GIF)";
          exit();
        }

        // init $image variable
        $image;

        // Resize image, based on filetype
        if ($type == 1) {
          $image = imagecreatefromgif($file);
        } elseif ($type == 2) {
          $image = imagecreatefromjpeg($file);
        } elseif ($type == 3) {
          $image = imagecreatefrompng($file);
        }

        $imgResized = imagescale($image, 400, 300);

        // Output resized image
        imagejpeg($imgResized, $file);

        // Display images and customization form
        echo "<div class='col-md-4'>
         <fieldset>
           <img class='img-fluid mb-3' src='" . $localPath . "' alt='Uploaded Image' />
           <div class='row mb-2'>
             <div class='col-md-4'>
               <label for='caption" . $i . "' class='form-label'>Caption:</label>
             </div>
             <div class='col-md-8'>
               <input type='text' class='form-control' id='caption" . $i . "' name='caption" . $i . "'>
             </div>
           </div>
           <div class='row'>
           <div class='col-md-4'>
           <label for='captionColor" . $i . "' class='form-label'>Caption Color:</label>
           </div>
           <div class='col-md-8'>
           <select class='form-select' aria-label='Caption Color Select' name='captionColor" . $i . "' id='captionColor" . $i . "'>
             <option value='DarkOrchid'>Dark Orchid</option>
             <option value='HotPink'>Hot Pink</option>
             <option value='DarkCyan'>Dark Cyan</option>
           </select>
           </div>
           <div>
           <input type='hidden' id='image" . $i . "' name='image" . $i . "' value='" . $i . $baseName . "' />
         </fieldset>
       </div>";
      }

      ?>
    </div>
    <div class='row mb-3'>
      <div class="col-sm-2">
      <label for='backgroundColor' class='form-label'>Page Background Color:</label>
      </div>
      <div class="col-sm-10">
        <select class='form-select' aria-label='Background Color Select' name='backgroundColor' id='backgroundColor'>
          <option value='Maroon'>Maroon</option>
          <option value='DarkOliveGreen'>Dark Olive Green</option>
          <option value='DarkSlateGrey'>Dark Slate Grey</option>
        </select>
      </div>
    </div>
    <div class='row mb-3'>
      <div class='col-sm-12' m-auto>
        <div class="d-grid gap-2 text-center">
          <button type="submit" class="btn btn-primary" name="submit">Customize Images</button>
        </div>
      </div>
    </div>

  </form>
</div>