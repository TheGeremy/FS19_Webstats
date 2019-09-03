<?php
/* Smarty version 3.1.33, created on 2019-07-04 21:01:39
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/storage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4d130260d6_23646883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8ad9158add8f287c25677bd02d9e2fa2e464d33' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/storage.tpl',
      1 => 1555715314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4d130260d6_23646883 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="my-3">##STOCKS##</h3>
<div class="row">
	<?php if ($_smarty_tpl->tpl_vars['options']->value['3column']) {?> <?php $_smarty_tpl->_assignInScope('class', "col-sm-4");?> <?php $_smarty_tpl->_assignInScope('end', 2);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[0] = -1;
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[1] = ceil((count($_smarty_tpl->tpl_vars['commodities']->value)/3));
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[2] = $_smarty_tpl->tpl_vars['colmax']->value[1]*2;
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[3] = count($_smarty_tpl->tpl_vars['commodities']->value);
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('class', "col-sm-3");?> <?php $_smarty_tpl->_assignInScope('end', 3);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[0] = -1;
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[1] = ceil((count($_smarty_tpl->tpl_vars['commodities']->value)/4));
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[2] = $_smarty_tpl->tpl_vars['colmax']->value[1]*2;
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[3] = $_smarty_tpl->tpl_vars['colmax']->value[1]*3;
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['colmax']) ? $_smarty_tpl->tpl_vars['colmax']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[4] = count($_smarty_tpl->tpl_vars['commodities']->value);
$_smarty_tpl->_assignInScope('colmax', $_tmp_array);?> <?php }?> <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['end']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['end']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
	<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>##COMMODITY##</th>
					<th class="text-right">##STOCK##</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commodities']->value, 'commodity', false, 'fillType');
$_smarty_tpl->tpl_vars['commodity']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fillType']->value => $_smarty_tpl->tpl_vars['commodity']->value) {
$_smarty_tpl->tpl_vars['commodity']->iteration++;
$__foreach_commodity_0_saved = $_smarty_tpl->tpl_vars['commodity'];
?> <?php if ($_smarty_tpl->tpl_vars['commodity']->iteration > $_smarty_tpl->tpl_vars['colmax']->value[$_smarty_tpl->tpl_vars['i']->value] && $_smarty_tpl->tpl_vars['commodity']->iteration <= $_smarty_tpl->tpl_vars['colmax']->value[$_smarty_tpl->tpl_vars['i']->value+1]) {?>
				<tr data-toggle="collapse" href="#collapse<?php echo $_smarty_tpl->tpl_vars['commodity']->value['i3dName'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['commodity']->value['outOfMap'])) {?>class="danger"<?php }?>>
					<td><?php echo $_smarty_tpl->tpl_vars['fillType']->value;?>
</td>
					<td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['commodity']->value['overall'],0,",",".");?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['commodity']->value['overall'] > -1) {?>
				<tr class="collapse" id="collapse<?php echo $_smarty_tpl->tpl_vars['commodity']->value['i3dName'];?>
">
					<td colspan="3" class="bg-dark">
						<table class="table diffcolor" style="margin-bottom: 0px;">
							<thead>
								<tr>
									<th>##PLACE##</th>
									<th class="text-right">##QUANTITY##</th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commodity']->value['locations'], 'location', false, 'locationName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locationName']->value => $_smarty_tpl->tpl_vars['location']->value) {
?> <?php $_smarty_tpl->_assignInScope('addInfo', false);?> <?php if (isset($_smarty_tpl->tpl_vars['location']->value['FillablePallet'])) {?> <?php if ($_smarty_tpl->tpl_vars['location']->value['FillablePallet'] == 1) {?> <?php $_smarty_tpl->_assignInScope('addInfo', "1 ##PALLET##");?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('addInfo', ((string)$_smarty_tpl->tpl_vars['location']->value['FillablePallet'])." ##PALETTES##");?> <?php }?> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['location']->value['Bale'])) {?> <?php if ($_smarty_tpl->tpl_vars['location']->value['Bale'] == 1) {?> <?php $_smarty_tpl->_assignInScope('addInfo', "1 ##BALE##");?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('addInfo', ((string)$_smarty_tpl->tpl_vars['location']->value['Bale'])." ##BALES##");?> <?php }?> <?php }?>
								<tr>
									<td><?php if (isset($_smarty_tpl->tpl_vars['plants']->value[$_smarty_tpl->tpl_vars['locationName']->value])) {?><a href="index.php?page=factories&object=<?php echo $_smarty_tpl->tpl_vars['plants']->value[$_smarty_tpl->tpl_vars['locationName']->value]['i3dName'];?>
"><?php echo $_smarty_tpl->tpl_vars['locationName']->value;?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['locationName']->value;
}
if ($_smarty_tpl->tpl_vars['addInfo']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['addInfo']->value;?>
)<?php }?>
									</td>
									<td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['location']->value['fillLevel'],0,",",".");?>
</td>
								</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</td>
				</tr>
				<tr></tr>
				<?php }?> <?php }?> <?php
$_smarty_tpl->tpl_vars['commodity'] = $__foreach_commodity_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
	</div>
	<?php }
}
?>
</div>
<div class="modal fade" id="optionsDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">##SETTINGS##</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="index.php?page=storage" method="post">
					<div class="form-group">
						<label class="col-sm-5 control-label">##SORT_ORDER##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="sortByName" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['sortByName']) {?>checked<?php }?>> ##ALPHABETICALLY##
							</label> <label class="radio-inline"> <input type="radio" name="sortByName" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['sortByName']) {?>checked<?php }?>> ##FILL_LEVEL##
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="sortType" class="col-sm-5 control-label">##VEHICLE_LOAD##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="showVehicles" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['showVehicles']) {?>checked<?php }?>> ##SHOW##
							</label> <label class="radio-inline"> <input type="radio" name="showVehicles" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['showVehicles']) {?>checked<?php }?>> ##HIDE##
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="sortType" class="col-sm-5 control-label">##ONLY_PALETTS##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="onlyPallets" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['onlyPallets']) {?>checked<?php }?>> ##YES##
							</label> <label class="radio-inline"> <input type="radio" name="onlyPallets" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['onlyPallets']) {?>checked<?php }?>> ##NO##
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="sortType" class="col-sm-5 control-label">##SHOW_ZERO_STOCK##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="showZero" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['showZero']) {?>checked<?php }?>> ##YES##
							</label> <label class="radio-inline"> <input type="radio" name="showZero" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['showZero']) {?>checked<?php }?>> ##NO##
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="sortType" class="col-sm-5 control-label">##HIDE_ANIMALS##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="hideAnimalsInStorage" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['hideAnimalsInStorage']) {?>checked<?php }?>> ##YES##
							</label> <label class="radio-inline"> <input type="radio" name="hideAnimalsInStorage" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['hideAnimalsInStorage']) {?>checked<?php }?>> ##NO##
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="3column" class="col-sm-5 control-label">##LAYOUT##</label>
						<div class="col-sm-7">
							<label class="radio-inline"> <input type="radio" name="3column" value="1" <?php if ($_smarty_tpl->tpl_vars['options']->value['3column']) {?>checked<?php }?>> ##3COLUMN##
							</label> <label class="radio-inline"> <input type="radio" name="3column" value="0" <?php if (!$_smarty_tpl->tpl_vars['options']->value['3column']) {?>checked<?php }?>> ##4COLUMN##
							</label>
						</div>
					</div>
		        </form>			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">##CLOSE##</button>
				<button type="submit" class="btn btn-success">##SAVE##</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="outOfMapAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">##INCORRECT_POSITIONS_TITLE##</h4>
			</div>
			<div class="modal-body">
				<p>##INCORRECT_POSITIONS_TEXT##</p>
				<table class="table text-nowrap">
					<thead>
						<tr>
							<th>##PALLET##/##BALE##</th>
							<th>##INCORRECT_POSITION##</th>
							<th>##SUGGESTION_POSITION##</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['outOfMap']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
							<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
							<td class="nowrap"><?php echo $_smarty_tpl->tpl_vars['item']->value[3];?>
</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">##CLOSE##</button>
			</div>
		</div>
	</div>
</div><?php }
}
