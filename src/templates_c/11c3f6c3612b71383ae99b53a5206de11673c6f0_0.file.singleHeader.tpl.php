<?php
/* Smarty version 4.3.2, created on 2023-09-15 07:17:28
  from '/Applications/www/server-side/src/templates/singleHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6503e8e8ab26a3_83625736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11c3f6c3612b71383ae99b53a5206de11673c6f0' => 
    array (
      0 => '/Applications/www/server-side/src/templates/singleHeader.tpl',
      1 => 1694755047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
  ),
),false)) {
function content_6503e8e8ab26a3_83625736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Header -->
<div class="container mt-4">
    <h1 class="display-6"><?php echo $_smarty_tpl->tpl_vars['pageHeader']->value;?>
</h1>
    <p class="lead"><?php echo $_smarty_tpl->tpl_vars['pageSubheader']->value;?>
</p>
</div>

<!-- Content Area -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

<?php }
}
