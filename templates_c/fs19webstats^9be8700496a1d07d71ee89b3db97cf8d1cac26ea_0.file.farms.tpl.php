<?php
/* Smarty version 3.1.33, created on 2019-08-16 11:07:10
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/farms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d56723e3ff972_83527925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be8700496a1d07d71ee89b3db97cf8d1cac26ea' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/farms.tpl',
      1 => 1565945189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d56723e3ff972_83527925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/volume2/web/FS19_Webstats/include/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="row">
	<div class="col padtop">
		<div class="table-responsive">
			<table class="table table-borderless">
				<thead>
					<tr class="d-flex">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
						<th class="col"><h4><?php echo $_smarty_tpl->tpl_vars['farm']->value['name'];?>
</h4></th> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				</thead>
				<tbody>
					<tr class="d-flex">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
						<td class="col"><strong>##FINANCES##: <?php echo number_format($_smarty_tpl->tpl_vars['farm']->value['money'],0,",",".");?>
 €</strong></td> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<tr class="d-flex">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
						<td class="col"><strong>##PLAYER##</strong><br> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farm']->value['players'], 'player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
?>
							<p class="my-1">
								<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['player']->value['name'],10,"...",true);
if ($_smarty_tpl->tpl_vars['player']->value['isFarmManager']) {?>  -  ##FARMMANAGER##<?php }?>
							</p><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<tr class="d-flex">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
						<td class="col"><?php if ((count($_smarty_tpl->tpl_vars['farm']->value['contractFrom']))+(count($_smarty_tpl->tpl_vars['farm']->value['contractWith'])) > 0) {?> <strong>##CONTRACTS##</strong>
							<ul class="list-unstyled mt-1">
								<?php if (count($_smarty_tpl->tpl_vars['farm']->value['contractFrom']) > 0) {?>
								<li>##WORKSFOR##
									<ul>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farm']->value['contractFrom'], 'bool', false, 'farmId2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId2']->value => $_smarty_tpl->tpl_vars['bool']->value) {
?>
										<li><?php echo $_smarty_tpl->tpl_vars['farms']->value[$_smarty_tpl->tpl_vars['farmId2']->value]['name'];?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</li> <?php }
if (count($_smarty_tpl->tpl_vars['farm']->value['contractWith']) > 0) {?>
								<li>##HASWORKSFOR##
									<ul>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farm']->value['contractWith'], 'bool', false, 'farmId2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId2']->value => $_smarty_tpl->tpl_vars['bool']->value) {
?>
										<li><?php echo $_smarty_tpl->tpl_vars['farms']->value[$_smarty_tpl->tpl_vars['farmId2']->value]['name'];?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</li><?php }?>
							</ul> <?php }?>
						</td> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<tr class="d-flex">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
						<td class="col-3"><?php if ($_smarty_tpl->tpl_vars['selectedFarm']->value == $_smarty_tpl->tpl_vars['farmId']->value) {?> <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&leave_farm=<?php echo $_smarty_tpl->tpl_vars['farmId']->value;?>
" class="btn btn-danger btn-sm btn-block" role="button">##LEAVE_FARM##</a> <?php } else { ?> <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&join_farm=<?php echo $_smarty_tpl->tpl_vars['farmId']->value;?>
" class="btn btn-primary btn-sm btn-block" role="button">##JOIN_FARM##</a><?php }?>
						</td> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }
}
