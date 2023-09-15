<?php
/* Smarty version 4.3.2, created on 2023-09-15 06:38:38
  from '/Applications/www/server-side/src/templates/single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6503dfce39f701_79760024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8709f4567ff1ae1cf1c0897b6f89ea2f5b354670' => 
    array (
      0 => '/Applications/www/server-side/src/templates/single.tpl',
      1 => 1694752603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_6503dfce39f701_79760024 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['pageContent']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <!-- Include dynamic content -->
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
