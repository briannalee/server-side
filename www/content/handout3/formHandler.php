<?php
session_start();
include('xmlTools.php');
$xmlFile = "reviews.xml";

/* This block handles the various requests from formHandler.js
   Add - Adds a review, accepts form data
   Delete - Deletes a review, accepts id parameter
   Edit - Enables edit mode on the table
*/

if (isset($_REQUEST['func'])) {
  $dom = readXMLFromFile($xmlFile);

  // Check the value of $_REQUEST['func'] to determine the action
  // Delete element from XML
  if ($_REQUEST['func'] === 'delete') {
    if (isset($_REQUEST['id'])) {
      $dom = deleteElementByAttribute($dom, 'id', $_REQUEST['id']);
      // Save the updated XML to file
      $dom->save($xmlFile);
      // Output the updated review table to javascript AJAX function, to update the 'Read' section
      echo outputReviewsTable($dom, true);
    } else {
      echo "Error: Missing 'id' parameter for deletion.";
    }
    // Add review to XML
  } elseif ($_REQUEST['func'] === 'add') {
    // Check input
    if (
      isset($_REQUEST['service'])
      && isset($_REQUEST['cuisine'])
      && isset($_REQUEST['price'])
      && isset($_REQUEST['comments'])
    ) {
      $review = array(
        'date'      => time(),
        'service'   => $_REQUEST['service'],
        'cuisine'   => $_REQUEST['cuisine'],
        'price'     => $_REQUEST['price'],
        'comments'  => $_REQUEST['comments']
      );
      // Add a new element to the XML
      $dom = addXMLElements($dom, 'reviews', 'review', $review);
      // Save the updated XML to file
      $dom->save($xmlFile);
      // Output the updated review table to the AJAX function, to update the 'Read' section
      echo outputReviewsTable($dom, $_SESSION['editMode']);
    } else {
      echo "Error: Missing required parameters for addition.";
    }
  } elseif ($_REQUEST['func'] === 'edit') {
    // Toggle edit mode
    $_SESSION['editMode'] = !$_SESSION['editMode'];
    echo outputReviewsTable($dom, $_SESSION['editMode']);
  } else {
    echo "Error: Invalid 'func' parameter.";
  }
}
