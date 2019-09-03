<?php
/* Smarty version 3.1.33, created on 2019-07-04 21:02:19
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4d3bb27494_34592385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef32e0252b5df26dcdcc30e36823f06fc0cea054' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/statistics.tpl',
      1 => 1555356436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4d3bb27494_34592385 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="my-3">##STATISTICS##</h3>
<div class="table-responsive">
	<table class="table table-sm table-striped table-borderless">
		<thead>
			<tr>
				<th></th> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'farm', false, 'farmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['farmId']->value => $_smarty_tpl->tpl_vars['farm']->value) {
?>
				<th><?php echo $_smarty_tpl->tpl_vars['farm']->value['name'];?>
</th> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farm']->value['statistics'], 'value', false, 'statistic');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statistic']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['value']->value['item'];
if ($_smarty_tpl->tpl_vars['value']->value['category'] == 'litres') {?> [##LITRES##]<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['category'] == 'hectares') {?> [##HA##]<?php }?></th> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['farms']->value, 'sFarm', false, 'sFrmId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sFrmId']->value => $_smarty_tpl->tpl_vars['sFarm']->value) {
?>
				<td class="text-right pr-3"><?php if ($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['category'] == 'count') {?> <?php echo number_format($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['value'],0,",",".");?>
 <?php } elseif ($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['category'] == 'litres') {?> <?php echo number_format($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['value'],2,",",".");?>
 <?php } elseif ($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['category'] == 'hectares') {?> <?php echo number_format($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['value'],2,",",".");?>
 <?php } elseif ($_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['category'] == 'time') {?> <?php echo $_smarty_tpl->tpl_vars['sFarm']->value['statistics'][$_smarty_tpl->tpl_vars['statistic']->value]['value'];?>
 <?php }?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
<?php }
}
