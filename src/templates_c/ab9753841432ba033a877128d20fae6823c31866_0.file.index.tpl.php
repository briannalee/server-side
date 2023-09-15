<?php
/* Smarty version 4.3.2, created on 2023-09-15 03:08:49
  from '/Applications/XAMPP/xamppfiles/htdocs/csci2442/server-side/src/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6503aea15653b9_22129844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab9753841432ba033a877128d20fae6823c31866' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/csci2442/server-side/src/templates/index.tpl',
      1 => 1694740082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6503aea15653b9_22129844 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html data-bs-theme="dark">

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo '<script'; ?>
 defer src="/csci2442/server-side/dist/main.js"><?php echo '</script'; ?>
>
</head>

<body class="">
<div class="container-fluid">
	<div class="row col-sm-12 text-center"><h1>Welcome to the CSCI 2442 Website of <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastName']->value;?>
</h1></div>
	<div class="row col-sm-12 text-center"><h1><?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
</h1></div>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="#">Your Brand</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>
</div>
</nav>

<!-- Page Header -->
<div class="container mt-4">
<h1 class="display-4">Welcome to Your Website</h1>
<p class="lead">A simple Bootstrap layout.</p>
</div>

<!-- Content Area -->
<div class="container">
<div class="row">
    <div class="col-md-8">
        <h2>Content Area</h2>
        <p>This is where your main content goes.</p>
    </div>
    <div class="col-md-4">
        <h3>Sidebar</h3>
        <p>Additional content or sidebar can go here.</p>
    </div>
</div>
</div><?php }
}
