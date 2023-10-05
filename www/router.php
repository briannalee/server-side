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

$pageID = isset($_GET['page']) ? $_GET['page'] : 'index';
$formattedWeekID = ucfirst(preg_replace('/(\d+)/', ' ${1}', $weekID));
$formattedPageID = $pageID == 'index' ? "Examples" : ucfirst(preg_replace('/(\d+)/', ' ${1}',$pageID));

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
