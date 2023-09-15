<?php
/* Smarty version 4.3.2, created on 2023-09-15 07:02:50
  from '/Applications/www/server-side/www/week02/content/Week2-Example2.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6503e57a010481_25222517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd790d46ffaf5cabf2e72119c5f049b425b8705e7' => 
    array (
      0 => '/Applications/www/server-side/www/week02/content/Week2-Example2.php',
      1 => 1694754086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6503e57a010481_25222517 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

	include '../environment.php';
  $pageTitle = 'Week02 - Example 2';
  include '../header.php';
	
	$value1 = 15;
	$value2 = 20;
	$value3= 25;

	// Add values together

	$result1 = $value1 + $value2;
	$result2 = $value1 + $value3;
	$result3 = $value2 + $value3;

	/*
		Dsiplay the results
		below.
	*/

	echo "<p>Value 1 is $value1</p>";
	echo "<p>Value 2 is $value2</p>";
	echo "<p>Value 3 is $value3</p>";
	echo "<p>Value 1 plus Value 2 is $result1</p>";
	echo "<p>Value 1 plus Value 3 is $result2</p>";
	echo "<p>Value 2 plus Value 3 is $result3</p>";
include '../footer.php';
<?php }
}
