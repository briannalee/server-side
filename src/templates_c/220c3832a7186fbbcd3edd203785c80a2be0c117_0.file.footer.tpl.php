<?php
/* Smarty version 4.3.2, created on 2023-10-05 23:43:47
  from '/Applications/www/server-side/src/templates/partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651f2e131cb063_02693375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220c3832a7186fbbcd3edd203785c80a2be0c117' => 
    array (
      0 => '/Applications/www/server-side/src/templates/partials/footer.tpl',
      1 => 1696542223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651f2e131cb063_02693375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/lib/php/smarty-4.3.2/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top m-auto">
  <div class="col-md-14 d-flex align-items-cente m-auto">
  <p>Copyright <i class="fa fa-copyright" class="h6"></i>&nbsp;<?php echo smarty_modifier_date_format(time(),'%Y');?>

  </div>
</footer>
</body>
<?php echo '<script'; ?>
>toggleElement('read');<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/dist/bundle.js"><?php echo '</script'; ?>
>

</html><?php }
}
