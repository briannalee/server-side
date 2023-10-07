<?php
require('./content/handout3/read.php');
?>
<div style='display:none;' id='read'>Read</div>
<div style='display:none;' id='write'>Write</div>
<div style='display:none;' id='delete'>Delete</div>


<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#read" role="button" aria-expanded="true" aria-controls="read">
    Read
  </a>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#write" role="button" aria-expanded="false" aria-controls="write">
    Write
  </a>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#manage" role="button" aria-expanded="false" aria-controls="manage">
    Manage
  </a>
</p>
<div class="collapse multi-collapse show" id="read">
  <div class="card card-body mb-3">
    <h5>Read Reviews</h5>
    <?php readReviewsXML(); ?>
  </div>
</div>
<div class="collapse multi-collapse mb-3" id="write">
  <div class="card card-body">
    <h5>Write a Review</h5>
    <div class="container px-5 my-5">
      <form id="contactForm" action="/handout/3" method="post">
        <div class="row mb-2">
          <div class="form-group col-sm-4">
            <label for="service">Service</label>
            <select class="form-control" id="service" aria-label="Service">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="cuisine">Cuisine</label>
            <select class="form-control" id="cuisine" aria-label="Cuisine">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <label for="price">Price</label>
            <select class="form-control" id="price" aria-label="Price">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="row mb-2">
          <div class="form-group col-sm-12">
            <label for="comments">Comments</label>
            <textarea class="form-control" id="comments" type="text" placeholder="Comments" style="height: 10rem;" required></textarea>
          </div>
        </div>
        <div class="col-sm-12 text-center">
          <button class="btn btn-primary w-100" id="submitButton" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="collapse multi-collapse" id="manage">
  <div class="card card-body">
    <h5>Manage Reviews</h5>
  </div>
</div>