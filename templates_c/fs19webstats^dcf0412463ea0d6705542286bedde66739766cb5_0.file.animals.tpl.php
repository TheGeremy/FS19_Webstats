<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:41:59
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/animals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4877cd6097_43503270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf0412463ea0d6705542286bedde66739766cb5' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/animals.tpl',
      1 => 1562265654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4877cd6097_43503270 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="my-3">##ANIMALS##</h3>
<?php if ($_smarty_tpl->tpl_vars['currentStable']->value && $_smarty_tpl->tpl_vars['currentAnimal']->value) {?>
<div class="row">
	<div class="col-30">
		<div class="list-group">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stables']->value, 'stable', false, 'stableI3dName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stableI3dName']->value => $_smarty_tpl->tpl_vars['stable']->value) {
?>
			<button type="button" class="list-group-item list-group-item-dark">
				<strong><?php echo $_smarty_tpl->tpl_vars['stable']->value['name'];?>
</strong>
			</button>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stable']->value['animals'], 'animal', false, 'animalI3dName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['animalI3dName']->value => $_smarty_tpl->tpl_vars['animal']->value) {
?> <a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&stable=<?php echo $_smarty_tpl->tpl_vars['stableI3dName']->value;?>
&animal=<?php echo $_smarty_tpl->tpl_vars['animalI3dName']->value;?>
" class="list-group-item list-group-item-action"> <?php if ($_smarty_tpl->tpl_vars['animal']->value['isHorse']) {?>##HORSE##<?php }?> <?php echo $_smarty_tpl->tpl_vars['animal']->value['name'];
if ($_smarty_tpl->tpl_vars['animal']->value['isHorse']) {?><br> <small>##DAY_RIDE##<span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['animal']->value['ridingTimer'],0,",",".");?>

						%</span></small><?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['animal']->value['count'];?>
<br> <small>##PRODUCTIVITY## <?php echo number_format($_smarty_tpl->tpl_vars['stable']->value['productivity'],0,",",".");?>
 %</small><?php }?>
			</a> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<div class="col-9">
		<div class="row">
			<div class="col-lg-6">
				<h4>
					<?php if ($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['isHorse']) {?>##HORSE##<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['name'];?>
<span class="float-right"><?php if ($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['isHorse']) {?>€
						<?php echo number_format($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['value'],0,",",".");
} else {
echo number_format($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['count'],0,",",".");
}?></span>
				</h4>
				<img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'IMAGES');?>
/<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['image'];?>
.png" class="img-fluid mx-auto d-block"> <?php if ($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['forHorses']) {?>
				<div class="row">
					<div class="col-4">##FITNESS##</div>
					<div class="col-4">
						<div class="progress">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['fitnessScale'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['fitnessScale'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-4"><?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['fitnessScale'];?>
 %</div>
				</div>
				<div class="row">
					<div class="col-4">##HEALTH##</div>
					<div class="col-4">
						<div class="progress">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['healthScale'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['healthScale'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-4"><?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['healthScale'];?>
 %</div>
				</div>
				<div class="row">
					<div class="col-4">##CLEANLINESS##</div>
					<div class="col-4">
						<div class="progress mt-0">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['dirtScale'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['dirtScale'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="col-4"><?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['dirtScale'];?>
 %</div>
				</div>
				<?php } else { ?>
				<div class="row">
					<div class="col-6">
						<h5>##PRODUCTIVITY##</h5>
					</div>
					<div class="col-3 text-right"><?php echo number_format($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['productivity'],0,",",".");?>
 %</div>
					<div class="col-3">
						<div class="progress">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['productivity'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['productivity'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<div class="row mt-1">
					<div class="col-6">##REPRO_RATE##</div>
					<div class="col-6 text-right"><?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['reproRate'];?>
 h</div>
				</div>
				<div class="row mt-1">
					<div class="col-6">##NEXT_ANIMAL##</div>
					<div class="col-6 text-right"><?php echo $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['animals'][$_smarty_tpl->tpl_vars['currentAnimal']->value]['nextAnimal'];?>
 h</div>
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['product'], 'product', false, 'productName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['productName']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
				<div class="row mt-1">
					<div class="col-6"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
					<div class="col-6 text-right"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['value'],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['unit'];?>
</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
			</div>
			<div class="col-lg-6">
				<h4>##STABLE_INFO##</h4>
				<h5>##STABLE_STATE##</h5>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['state'], 'state', false, 'stateName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stateName']->value => $_smarty_tpl->tpl_vars['state']->value) {
?>
				<div class="row mt-1">
					<div class="col-6"><?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</div>
					<div class="col-3 text-right"><?php echo number_format($_smarty_tpl->tpl_vars['state']->value['value'],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['state']->value['unit'];?>
</div>
					<div class="col-3">
						<div class="progress">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['state']->value['factor'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['state']->value['factor'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<h5 class="mt-5">##FOOD##</h5>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stables']->value[$_smarty_tpl->tpl_vars['currentStable']->value]['trough'], 'food', false, 'foodName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foodName']->value => $_smarty_tpl->tpl_vars['food']->value) {
?>
				<div class="row mt-1">
					<div class="col-6"><?php echo $_smarty_tpl->tpl_vars['food']->value['name'];?>
</div>
					<div class="col-3 text-right"><?php echo number_format($_smarty_tpl->tpl_vars['food']->value['value'],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['food']->value['unit'];?>
</div>
					<div class="col-3">
						<div class="progress">
							<?php $_smarty_tpl->_assignInScope('style', (('style="width: ').($_smarty_tpl->tpl_vars['food']->value['valuePercent'])).('%"'));?>
							<div class="progress-bar" role="progressbar" <?php echo $_smarty_tpl->tpl_vars['style']->value;?>
 aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['food']->value['valuePercent'];?>
" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<div class="jumbotron my-3 py-3">
	<p class="lead">##NOSTABLES##</p>
</div>
<?php }
}
}
