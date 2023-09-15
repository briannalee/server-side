<?php
// Init Smarty, set website variables, globals, etc
include 'init.php';

// 
$smarty->assign('pageHeader', $smarty->getTemplateVars('firstName') . "'s Server Side Pages");
$smarty->assign('pageContent', 'content/' . basename(__FILE__));
$smarty->assign('pageSidebar', 'content/sidebar.php');
$smarty->assign(
	'pageSubheader',
	"A collection of PHP pages, templated with Smarty & URL Rewriting, styled with SASS, packed using Webpack"
);

// Render page
$smarty->display('index.tpl');
