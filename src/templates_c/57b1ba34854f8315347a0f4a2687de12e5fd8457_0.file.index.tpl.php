<?php
/* Smarty version 4.3.2, created on 2023-09-15 06:23:33
  from '/Applications/www/server-side/src/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6503dc4527b285_22980652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b1ba34854f8315347a0f4a2687de12e5fd8457' => 
    array (
      0 => '/Applications/www/server-side/src/templates/index.tpl',
      1 => 1694751761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_6503dc4527b285_22980652 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="col-md-8">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['pageContent']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <!-- Include dynamic content -->
        </div>
        <div class="col-md-4">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['pageSidebar']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
