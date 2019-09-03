<?php
/* Smarty version 3.1.33, created on 2019-07-04 21:02:29
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4d4563ef85_02107693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e011feed30cf4b57692d8d22bb76b9821a6ca1e4' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/options.tpl',
      1 => 1555356436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4d4563ef85_02107693 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.custom-select {
	background: none !important;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <?php }?>
<h3 class="my-3">##SETTINGS##</h3>
<form class="form" action="index.php?page=options" method="post">
	<div class="row">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##CHOOSE_LANGUAGE_LABEL##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_language">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="g_language" id="g_language"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['path'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['path'] == $_SESSION['language']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['localName'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_language">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##CHOOSE_STYLE##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_style">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="g_style" id="g_style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['styles']->value, 'styleData');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['styleData']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['styleData']->value['path'];?>
" <?php if ($_smarty_tpl->tpl_vars['styleData']->value['path'] == $_smarty_tpl->tpl_vars['style']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['styleData']->value['name'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_style">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##AUTO_RELOAD##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##AUTO_RELOAD_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_reload">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="g_reload" id="g_reload">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['general']['reload']) {?>selected<?php }?>>##YES##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['general']['reload']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_reload">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##HIDE_FOOTER##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="g_hideFooter">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="g_hideFooter" id="g_hideFooter">
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['general']['hideFooter']) {?>selected<?php }?>>##SHOW##</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['general']['hideFooter']) {?>selected<?php }?>>##HIDE##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="g_hideFooter">&#11208;</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##SORT_ORDER##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_sortByName">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_sortByName" id="s_sortByName">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['sortByName']) {?>selected<?php }?>>##ALPHABETICALLY##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['sortByName']) {?>selected<?php }?>>##FILL_LEVEL##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_sortByName">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##VEHICLE_LOAD##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##VEHICLE_LOAD_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_showVehicles">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_showVehicles" id="s_showVehicles">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['showVehicles']) {?>selected<?php }?>>##SHOW##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['showVehicles']) {?>selected<?php }?>>##HIDE##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_showVehicles">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##ONLY_PALETTS##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_onlyPallets">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_onlyPallets" id="s_onlyPallets">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['onlyPallets']) {?>selected<?php }?>>##YES##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['onlyPallets']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_onlyPallets">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##SHOW_ZERO_STOCK##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##SHOWZERO_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_showZero">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_showZero" id="s_showZero">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['showZero']) {?>selected<?php }?>>##YES##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['showZero']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_showZero">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##HIDE_ANIMALS##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##HIDE_ANIMALS_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_hideAnimalsInStorage">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_hideAnimalsInStorage" id="s_hideAnimalsInStorage">
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['hideAnimalsInStorage']) {?>selected<?php }?>>##YES##</option>
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['hideAnimalsInStorage']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_hideAnimalsInStorage">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##LAYOUT##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="s_3column">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="s_3column" id="s_3column">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['storage']['3column']) {?>selected<?php }?>>##3COLUMN##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['storage']['3column']) {?>selected<?php }?>>##4COLUMN##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="s_3column">&#11208;</button>
				</div>
			</div>
		</div>
	</div>
	<h3 class="my-3 d-none">##SETTINGS## - ##PLANTS##</h3>
	<div class="row d-none">
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##SORT_ORDER##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="p_sortByName">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="p_sortByName" id="p_sortByName">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['production']['sortByName']) {?>selected<?php }?>>##ALPHABETICALLY##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['production']['sortByName']) {?>selected<?php }?>>##FILL_LEVEL##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="p_sortByName">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##FULL_PRODUCT_STORAGE##</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="p_sortFullProducts">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="p_sortFullProducts" id="p_sortFullProducts">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['production']['sortFullProducts']) {?>selected<?php }?>>##SORT_FULL_PRODUCTS##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['production']['sortFullProducts']) {?>selected<?php }?>>##IGNORE_FULL_PRODUCTS##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="p_sortFullProducts">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##TOOLTIP##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##TOOLTIP_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="p_showTooltip">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="p_showTooltip" id="p_showTooltip">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['production']['showTooltip']) {?>selected<?php }?>>##YES##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['production']['showTooltip']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="p_showTooltip">&#11208;</button>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-4">
			<label for="basic-url">##HIDE_NOT_USED##</label>
			<div class="input-group mb-3 hoverhelp" data-helptext="##HIDE_NOT_USED_HELP##">
				<div class="input-group-prepend">
					<button class="btn btn-outline-secondary back-button" type="button" data-id="p_hideNotUsed">&#11207;</button>
				</div>
				<select class="custom-select text-center" name="p_hideNotUsed" id="p_hideNotUsed">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['production']['hideNotUsed']) {?>selected<?php }?>>##YES##</option>
					<option value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['production']['hideNotUsed']) {?>selected<?php }?>>##NO##</option>
				</select>
				<div class="input-group-append">
					<button class="btn btn-outline-secondary next-button" type="button" data-id="p_hideNotUsed">&#11208;</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="basic-url">&nbsp;</label>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">i</span>
				</div>
				<input type="text" class="form-control" id="helpRow">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<button type="button" data-toggle="modal" data-target="#password_check" class="btn btn-danger">##SERVER_SETTINGS##</button>
			<button type="submit" class="btn btn-success float-right" name="submit" value="options">##SAVE##</button>
			<button type="reset" class="btn btn-default float-right mr-2">##RESET##</button>
		</div>
	</div>
</form>
<div class="modal fade" id="password_check" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form action="index.php?page=options" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">##ADMIN_AREA##</h4>
				</div>
				<div class="modal-body">
					<p>##ADMIN_DESCRIPTION##</p>
					<p>##ENTER_PASSWORD##</p>
					<label for="inputPassword" class="sr-only">Password</label> <input type="password" name="adminpass1" id="inputPassword" class="form-control" placeholder="##DS_PLACEHOLDE5##" required autofocus>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">##CLOSE##</button>
					<button type="submit" class="btn btn-warning" name="submit" value="password">##SUBMIT##</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php echo '<script'; ?>
>
$(".next-button").click(function() {
	id = ($(this).data("id"));
	var nextElement = $('#' + id + ' > option:selected').next('option');
	if (nextElement.length > 0) {
		$('#' + id + ' > option:selected').removeAttr('selected').next('option').attr('selected', 'selected');
	}
})
$(".back-button").click(function() {
	id = ($(this).data("id"));
	var nextElement = $('#' + id + ' > option:selected').prev('option');
	if (nextElement.length > 0) {
		$('#' + id + ' > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected');
	}
});
$(".hoverhelp").hover(function() {
	text = ($(this).data("helptext"));
	$('#helpRow').val(text);
}, function () {
	$('#helpRow').val('');
})

<?php echo '</script'; ?>
><?php }
}
