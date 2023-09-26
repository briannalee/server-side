<div class="row">

  <form action="/handout/2/imageCustomize" method="post" enctype="multipart/form-data" class="form-inline">
    <legend>Please customize images:</legend>
    <div class="row mb-4">
      <?php

      // Empty resources folder before copying files
      $files = glob(getcwd() . '/content/handout2/resources/*');
      foreach($files as $file){
        if(is_file($file)) {
          unlink($file); // Delete file
        }
      }

      // Set allowed types of images, 1 - GIF, 2 - JPEG, 3 - PNG
      $allowedTypes = [1, 2, 3];

      for ($i = 1; $i <= 3; $i++) {
        // Get image and type, and check against supported types
        $image = $_FILES['image' . $i];
        $imageType = exif_imagetype($image['tmp_name']);

        // If image is not a type we can deal with, error out.
        if (!in_array($imageType, $allowedTypes)) {
          echo "<div class='bg-danger h4'> Please upload supported filetype (PNG, JPEG, GIF)</div>";
          return;
        }

        // Get image file from temp directory and copy to resources directory
        $fileSeed = random_int(1000, 10000000) . time();

        // Destination file we will convert to jpeg after this process
        $convertedImage = $fileSeed . '.jpeg';

        // Copy file from tmp dir to working dir
        $fileName = $fileSeed . image_type_to_extension($imageType);
        $file = getcwd() . '/content/handout2/resources/' . $fileName;
        @copy($image['tmp_name'], $file);

        // Create php image from file
        switch ($imageType) {
          case 1:
            $src = imagecreatefromgif($file);
            break;
          case 2:
            $src = imagecreatefromjpeg($file);
            break;
          case 3:
            $src = imagecreatefrompng($file);
            break;
          default:
            // Image conversion failed, exit out.
            echo "<div class='bg-danger h4'>Image conversion failed!</div>";
            return;
        }

        // Delete old file
        if (!unlink($file)) {
          echo ("File cannot be deleted due to an error");
        }

        // Output resized image
        $src = imagescale($src, 800, 600);
        imagejpeg($src, getcwd() . '/content/handout2/resources/' . $convertedImage);

        $imageWebPath = '/content/handout2/resources/' . $convertedImage;

        // Display images and customization form
        echo "<div class='col-md-4'>
          <div class='row mb-auto '>
            <img class='mb-3 col-12' src='" . $imageWebPath . "' alt='Uploaded Image' />
          </div>
          <fieldset>
            <div class='row mb-2 mt-auto'>
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
            <input type='hidden' id='image" . $i . "' name='image" . $i . "' value='" . $convertedImage . "' />
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