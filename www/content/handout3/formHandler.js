// @ts-nocheck
/**
 * Adds a review to the XML file via AJAX request to addReview.php
 */
function addReview() {

  var service = document.getElementById("service").value;
  var cuisine = document.getElementById("cuisine").value;
  var price = document.getElementById("price").value;
  var comments = (document.getElementById("comments")).value;

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // Display success message
      document.getElementById("message-area").innerHTML = "<div id='success-alert'class='alert alert-success d-flex align-items-center alert-dismissible fade show' role='alert'>Review Added<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
      document.getElementById("review-data").innerHTML = request.responseText;
      document.getElementById("addForm").reset();
    
    }else{
      // Display error message
      document.getElementById("message-area").innerHTML = "<div id='danger-alert'class='alert alert-danger d-flex align-items-center alert-dismissible fade show' role='alert'>Error Adding Review<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>"
    }
  };

  request.open("POST", "/content/handout3/formHandler.php", false);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send("func=add&service="+service+"&cuisine="+cuisine+"&price="+price+"&comments="+comments);
}



/**
 * Deletes the specified review from an XML file via AJAX request to deleteReview.php
 * @param {int} id 
 */
function deleteReview(id) {
  var request = new XMLHttpRequest();
  
  // Define a flag to track whether the request is successful
  var requestSuccessful = false;

  request.onreadystatechange = function () {
    if (this.readyState == 4) {
      // Check if the request was successful
      if (this.status == 200) {
        requestSuccessful = true;
        // Update forms
        document.getElementById("review-data").innerHTML = request.responseText;
      }
      
      // Check if the request was not successful and the flag is false
      if (!requestSuccessful) {
        // Display error message
        document.getElementById("review-message-area").innerHTML = "<div id='danger-alert'class='alert alert-danger d-flex align-items-center alert-dismissible fade show' role='alert'>Error Deleting Review<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
      }
    }
  };

  request.open("POST", "/content/handout3/formHandler.php", false);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send("func=delete&id=" + id);
}

/**
 * Changes the review table to edit mode
 */
function changeToEditMode() {
  var request = new XMLHttpRequest();
  
  // Define a flag to track whether the request is successful
  var requestSuccessful = false;

  request.onreadystatechange = function () {
    if (this.readyState == 4) {
      // Check if the request was successful
      if (this.status == 200) {
        requestSuccessful = true;
        // Update forms
        document.getElementById("review-data").innerHTML = request.responseText;
      }
      
      // Check if the request was not successful and the flag is false
      if (!requestSuccessful) {
        // Display error message
        document.getElementById("review-message-area").innerHTML = "<div id='danger-alert' class='alert alert-danger d-flex align-items-center alert-dismissible fade show' role='alert'>Error Changing to Edit Mode<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
      }
    }
  };

  request.open("POST", "/content/handout3/formHandler.php", false);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send("func=edit");
}


/**
 * Helper function to delay an action
 * 
 * @param int ms 
 * @returns 
 */
const delay = ms => new Promise(res => setTimeout(res, ms));

/**
 * Helper function to scroll the view smoothly to a card
 * 
 * @param string cardId 
 */
const scrollToCard = async (cardId) => {
  await delay(150);
  // Scroll to the card with the given ID
  const cardElement = document.getElementById(cardId);
  if (cardElement) {
    cardElement.scrollIntoView({ behavior: 'smooth' });
  }
}