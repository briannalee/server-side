<?php
require_once('init.php'); // Include Smarty and other necessary initialization code


// Extract page identifier from the URL (e.g., "/page/week1.php" => "week1")
// week2 or Handout02 is the default week/handout, index is default page
$weekID = 'week2'; // Default week

if (isset($_GET['week'])) {
  $weekID = 'week' . $_GET['week'];
}

if (isset($_GET['handout'])) {
  $weekID = 'handout' . $_GET['handout'];
}

// Get pageID (if set), otherwise set to index
$pageID = isset($_GET['page']) ? $_GET['page'] : 'index';

// Format weekID and pageID for user display
$formattedWeekID = ucfirst(preg_replace('/(\d+)/', ' ${1}', $weekID));

// If supplied subheader use that, otherwise use automated subheader
if (isset($_GET['subheader'])) {
  $formattedPageID = $_GET['subheader'];
}else{
  // Subheader for Labs
  $formattedPageID = str_contains($weekID,'week') && $pageID == 'index' ? "Examples" : ucfirst(preg_replace('/(\d+)/', ' ${1}',$pageID));
  // Subheader for Handouts
  $formattedPageID = str_contains($weekID,'handout') && $pageID == 'index' ? "Homework" : ucfirst(preg_replace('/(\d+)/', ' ${1}',$pageID));
}



$formattedPageID = isset($_GET['subheader']) ?  : $formattedPageID;

$smarty->assign('pageHeader', $formattedWeekID);
$smarty->assign('pageSubheader', $formattedPageID);

$path = 'content/' . $weekID . '/' . $pageID . '.php';
// Generate content based on the page identifier
// You can implement logic to handle different pages dynamically
// For example, include 'content/' . $pageIdentifier . '.php' and assign Smarty variables

// Render the template
$smarty->display('singleHeader.tpl');
include $path;
$smarty->display('singleFooter.tpl');
