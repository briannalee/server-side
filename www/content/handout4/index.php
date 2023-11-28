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
  <div class="container mt-4">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item dropdown">
      <button class="nav-link dropdown-toggle" id="display-dropdown" data-bs-toggle="dropdown" aria-expanded="false">Display</button>
      <ul class="dropdown-menu" aria-labelledby="display-dropdown">
        <li><a class="dropdown-item" href="#reviews-by-date" data-bs-toggle="tab" role="tab">Reviews by Date</a></li>
        <li><a class="dropdown-item" href="#reviews-by-service" data-bs-toggle="tab" role="tab">Reviews by Service</a></li>
        <li><a class="dropdown-item" href="#reviews-by-cuisine" data-bs-toggle="tab" role="tab">Reviews by Cuisine</a></li>
        <li><a class="dropdown-item" href="#reviews-by-price" data-bs-toggle="tab" role="tab">Reviews by Price</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="new-review-tab" data-bs-toggle="tab" data-bs-target="#new-review" type="button" role="tab" aria-controls="new-review" aria-selected="false">New Review</button>
    </li>
    <li class="nav-item">
      <button class="nav-link" id="delete-reviews-tab" data-bs-toggle="tab" data-bs-target="#delete-reviews" type="button" role="tab" aria-controls="delete-reviews" aria-selected="false">Delete Reviews</button>
    </li>
  </ul>
  <div class="tab-content mt-2" id="myTabContent">
    <div class="tab-pane fade show active" id="reviews-by-date" role="tabpanel">
      <!-- Reviews by Date content -->
      <p>Reviews by Date content goes here.</p>
    </div>
    <div class="tab-pane fade" id="reviews-by-service" role="tabpanel">
      <!-- Reviews by Service content -->
      <p>Reviews by Service content goes here.</p>
    </div>
    <div class="tab-pane fade" id="reviews-by-cuisine" role="tabpanel">
      <!-- Reviews by Cuisine content -->
      <p>Reviews by Cuisine content goes here.</p>
    </div>
    <div class="tab-pane fade" id="reviews-by-price" role="tabpanel">
      <!-- Reviews by Price content -->
      <p>Reviews by Price content goes here.</p>
    </div>
    <div class="tab-pane fade" id="new-review" role="tabpanel" aria-labelledby="new-review-tab">
      <!-- New Review content -->
      <p>New Review content goes here.</p>
    </div>
    <div class="tab-pane fade" id="delete-reviews" role="tabpanel" aria-labelledby="delete-reviews-tab">
      <!-- Delete Reviews content -->
      <p>Delete Reviews content goes here.</p>
    </div>
  </div>
</div>

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