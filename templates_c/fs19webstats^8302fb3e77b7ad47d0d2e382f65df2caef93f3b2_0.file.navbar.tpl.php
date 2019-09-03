<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:41:59
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4877beae40_23029721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8302fb3e77b7ad47d0d2e382f65df2caef93f3b2' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/navbar.tpl',
      1 => 1555802310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4877beae40_23029721 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark justify-content-lg-center py-0">
	<a class="navbar-brand d-lg-none d-xl-block" href="index.php">FS19 Web Stats - <?php echo $_smarty_tpl->tpl_vars['map']->value['Short'];?>
 <?php echo $_smarty_tpl->tpl_vars['map']->value['Version'];?>
</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-lg-between align-items-lg-center" id="navbarNav">
		<ul class="navbar-nav mx-lg-auto mr-md-auto text-lg-center">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navItems']->value, 'navItem', false, 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value => $_smarty_tpl->tpl_vars['navItem']->value) {
?> 
			<?php if ($_smarty_tpl->tpl_vars['navItem']->value['showInNav']) {?>
				<?php if ($_smarty_tpl->tpl_vars['navItem']->value['active']) {?> 
					<?php $_smarty_tpl->_assignInScope('class', "nav-item active");?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('class', "nav-item");?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['navItem']->value['hasSubmenu']) {?>
					<li class="<?php echo ($_smarty_tpl->tpl_vars['class']->value).(' dropdown');?>
">
						<a class="nav-link dropdown-toggle py-0" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" id="navbarDropdown" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'IMAGES');?>
/<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
.png" class="img-fluid d-none d-lg-block"><span class="d-lg-none d-md-block"><?php echo $_smarty_tpl->tpl_vars['navItem']->value['text'];?>
</span></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navItem']->value['submenu'], 'subItem', false, 'subLink');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subLink']->value => $_smarty_tpl->tpl_vars['subItem']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['subItem']->value['showInNav']) {?>
								<a class="dropdown-item" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
&subPage=<?php echo $_smarty_tpl->tpl_vars['subLink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subItem']->value['text'];?>
</a>
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</li>
				<?php } else { ?>
					<li class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
						<a class="nav-link py-0" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'IMAGES');?>
/<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
.png" class="img-fluid d-none d-lg-block"><span class="d-lg-none d-md-block"><?php echo $_smarty_tpl->tpl_vars['navItem']->value['text'];?>
</span></a>
					</li>
				<?php }?>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<span class="navbar-text  bg-secondary text-white px-3 text-right font-weight-bold text-nowrap">##DAY## <?php echo $_smarty_tpl->tpl_vars['currentDay']->value;?>
 | ##TIME## <?php echo $_smarty_tpl->tpl_vars['dayTime']->value;
if ($_smarty_tpl->tpl_vars['money']->value !== false) {?> | ##MONEY## <?php echo number_format($_smarty_tpl->tpl_vars['money']->value,0,",",".");?>
 €<?php }?></span>
	</div>
</nav>
<?php }
}
