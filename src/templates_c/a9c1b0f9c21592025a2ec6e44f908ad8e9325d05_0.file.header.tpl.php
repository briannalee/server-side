<?php
/* Smarty version 4.3.2, created on 2023-09-19 18:58:23
  from '/Applications/www/server-side/src/templates/partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6509d32f536e86_51887043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c1b0f9c21592025a2ec6e44f908ad8e9325d05' => 
    array (
      0 => '/Applications/www/server-side/src/templates/partials/header.tpl',
      1 => 1695099234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./navbar.tpl' => 1,
  ),
),false)) {
function content_6509d32f536e86_51887043 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['websiteName']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/dist/assets/favicon.png">
</head>

<body>

<?php $_smarty_tpl->_subTemplateRender("file:./navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
