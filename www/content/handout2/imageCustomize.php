<div class='row'>
  <?php
  $backgroundColor = $_POST['backgroundColor'];
  echo "<script> document.body.style='background-color: " . $backgroundColor . ";'</script>";

  for ($i = 1; $i <= 3; $i++) {
    $imageName = $_POST['image' . $i];
    $imageCaption = $_POST['caption' . $i];
    $captionColor = $_POST['captionColor' . $i];

    echo "<div class='col-md-4'>
          <figure class='figure'>
          <img src='/content/handout2/resources/$imageName' class='figure-img img-fluid rounded' alt='customized image'>
          <figcaption class='figure-caption bg-dark-subtle h6 text-center' style='color:$captionColor'>$imageCaption</figcaption>
          </figure>
        </div>";
  }
  ?>
</div>