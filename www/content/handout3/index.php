<?php
require('./content/handout3/xmlTools.php');
$xmlFile = "./content/handout3/reviews.xml";
$xmlData = readXMLFromFile($xmlFile);
$_SESSION['editMode'] = false;
?>
<div class='row bg-body-secondary'>
  <div class="page-header py-5 text-center bg-body-tertiary">
    <h1>Mario's Italian Restaurant</h1>

  </div>
  <hr />

  <div class='col-md-8'>
    <p class="d-inline-flex gap-1">
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#read" role="button" aria-expanded="true" aria-controls="read">
        Read
      </a>
      <a class="btn btn-primary" data-bs-toggle="collapse" href="#write" role="button" aria-expanded="false" aria-controls="write" onclick="scrollToCard('write')">
        Write
      </a>
    </p>
    <div class="collapse multi-collapse show" id="read">
      <div class="card card-body mb-3">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <h5>Read Reviews</h5>
          </div>
          <div class="col-md-3 col-sm-4">
            <a class="btn btn-danger w-100" role="button" onclick="changeToEditMode();">
              Manage
            </a>
          </div>
        </div>
        <div id='review-message-area'></div>
        <div id="review-data">
          <?php
          echo outputReviewsTable($xmlData, false);
          ?>
        </div>
      </div>
    </div>
    <div class="collapse multi-collapse mb-3" id="write">
      <div class="card card-body">
        <h5>Write a Review</h5>
        <div id='message-area'></div>
        <div class="container px-5 my-5">
          <form id="addForm" action="/handout/3" method="post">
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
              <button class="btn btn-primary w-100" id="submitButton" type="button" onclick="addReview('test')">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class='col-md-4'>
    <img src="/dist/assets/restaurant.jpg" class="img-rounded img-fluid" alt="Cinque Terre" />
  </div>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">© 2023 Mario's Restaurant Corp.</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-threads"></i></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><i class="fa-brands fa-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/content/handout3/formHandler.js"></script>