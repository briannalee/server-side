<?php
/* Smarty version 4.3.2, created on 2023-09-21 19:58:35
  from '/Applications/www/server-side/src/templates/partials/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_650c844bc4d766_95317620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f356d1fead4073c08a2874ca4623f8d7e6d297d' => 
    array (
      0 => '/Applications/www/server-side/src/templates/partials/navbar.tpl',
      1 => 1695319114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650c844bc4d766_95317620 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['websiteName']->value;?>
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar01"
      aria-controls="navBar01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navBar01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarHomeworkDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Labs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarHomeworkDropdown">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 16+1 - (2) : 2-(16)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <?php $_smarty_tpl->_assignInScope('weekNumber', $_smarty_tpl->tpl_vars['i']->value);?>
            <li><a class="dropdown-item" href="/weeks/<?php echo $_smarty_tpl->tpl_vars['weekNumber']->value;?>
">Week <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
          <?php }
}
?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarWeeksDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Assignments
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarWeeksDropdown">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 6+1 - (1) : 1-(6)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li><a class="dropdown-item" href="/handout/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">Handout <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
          <?php }
}
?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav><?php }
}
