<?php
/* Smarty version 3.1.33, created on 2019-07-11 17:22:44
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2754445f68e7_91156373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e620ec6b3f4f2302524d6203b566c737dcef05' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/prices.tpl',
      1 => 1562858547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2754445f68e7_91156373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/volume2/web/FS19_Webstats/include/smarty/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_assignInScope('mode', GetParam('subPage','G','bestPrices'));?> <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'allPrices') {?>
<!-- Alternative ingame like price overview. Looks not good. -->
<h3 class="my-3">##ALLPRICES_LABEL##</h3>
<div class="row">
	<div class="col-sm-12">
		<table class="table  table-hover table-bordered table-striped" id="allPrices">
			<thead>
				<tr>
					<th class="">##SELLTRIGGER##</th> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'fillTypeData', false, 'fillType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fillType']->value => $_smarty_tpl->tpl_vars['fillTypeData']->value) {
?>
					<th class="text-center"><?php echo $_smarty_tpl->tpl_vars['fillType']->value;?>
</th> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellingPoints']->value, 'i3dName', false, 'location');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value => $_smarty_tpl->tpl_vars['i3dName']->value) {
?>
				<tr>
					<td class="text-nowrap">
						<strong><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</strong>
					</td> 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'fillTypeData', false, 'fillType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fillType']->value => $_smarty_tpl->tpl_vars['fillTypeData']->value) {
?>
						<?php if (isset($_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value])) {?>
							<?php echo smarty_function_math(array('equation'=>"round(100 / max * current)",'max'=>$_smarty_tpl->tpl_vars['fillTypeData']->value['maxPrice']-$_smarty_tpl->tpl_vars['fillTypeData']->value['minPrice']+0.0001,'current'=>$_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['price']-$_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['minPrice']+0.0001,'assign'=>"percent"),$_smarty_tpl);?>

							<?php $_smarty_tpl->_assignInScope('dataorder', "data-order='".((string)$_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['price'])."'");?>
							<?php if ($_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['greatDemand']) {?>
								<?php $_smarty_tpl->_assignInScope('class', "text-info");?>
							<?php } elseif ($_smarty_tpl->tpl_vars['percent']->value >= 60) {?>
								<?php $_smarty_tpl->_assignInScope('class', "text-success");?>
							<?php } elseif ($_smarty_tpl->tpl_vars['percent']->value <= 40) {?>
								<?php $_smarty_tpl->_assignInScope('class', "text-danger");?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['priceTrend'] == 1) {?>
								<?php $_smarty_tpl->_assignInScope('trend', '<i class="fas fa-caret-up text-success"></i>');?>
							<?php } elseif ($_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['priceTrend'] == -1) {?>
								<?php $_smarty_tpl->_assignInScope('trend', '<i class="fas fa-caret-down text-danger"></i>');?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('trend', '<i class="fas fa-caret-down" style="visibility: hidden"></i>');?>
							<?php }?>
							<?php $_smarty_tpl->_assignInScope('value', number_format($_smarty_tpl->tpl_vars['fillTypeData']->value['locations'][$_smarty_tpl->tpl_vars['location']->value]['price'],0,",","."));?>
							
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('dataorder', '');
$_smarty_tpl->_assignInScope('class', '');
$_smarty_tpl->_assignInScope('value', '');
$_smarty_tpl->_assignInScope('trend', '');?>
						<?php }?>
						<td <?php echo $_smarty_tpl->tpl_vars['dataorder']->value;?>
 class="text-nowrap <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 pr-2"><?php echo $_smarty_tpl->tpl_vars['trend']->value;?>
<span class="float-right"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span></td>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
			<tfoot>
				<tr>
					<th>##STOCKS##</th> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'fillTypeData', false, 'fillType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fillType']->value => $_smarty_tpl->tpl_vars['fillTypeData']->value) {
?>
					<th class="text-right pr-2"><?php if (isset($_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value])) {
echo number_format($_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value]['overall'],0,",",".");
}?></th> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
			</tfoot>
		</table>
		<?php echo '<script'; ?>
><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'price');
$_smarty_tpl->tpl_vars['price']->iteration = 0;
$_smarty_tpl->tpl_vars['price']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->iteration++;
$_smarty_tpl->tpl_vars['price']->index++;
$_smarty_tpl->tpl_vars['price']->first = !$_smarty_tpl->tpl_vars['price']->index;
$__foreach_price_4_saved = $_smarty_tpl->tpl_vars['price'];
if ($_smarty_tpl->tpl_vars['price']->first) {
$_smarty_tpl->_assignInScope('cols', ('[').($_smarty_tpl->tpl_vars['price']->iteration));
} else {
$_smarty_tpl->_assignInScope('cols', (($_smarty_tpl->tpl_vars['cols']->value).(',')).($_smarty_tpl->tpl_vars['price']->iteration));
}
$_smarty_tpl->tpl_vars['price'] = $__foreach_price_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('cols', ($_smarty_tpl->tpl_vars['cols']->value).(']'));?>
		var cols = <?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
;
		var h = window.innerHeight; //Height of the HTML document
<?php if ($_smarty_tpl->tpl_vars['options']->value['hideFooter']) {?>
		var c = 320; // Sum of the heights of navbar, footer, headings, etc.
<?php } else { ?>
		var c = 400; // Sum of the heights of navbar, footer, headings, etc.
<?php }?> 
		var th = parseInt((h-c)/h*100) + 'vh'; // Height for table 
		var rw = parseInt((h - c) / 30); // Rows when paging is activated
		$(document).ready(function() {
			$('#allPrices').DataTable( {
				"fixedColumns": true,
				columnDefs: [
			        { "width": "115px", "targets": [0] },       
			        { "width": "45px", "targets": cols }
			      ],
				"bFilter": false,
		    	"paging": false,		    	
		    	"autoWidth": true,
		    	"info": false,
		    	"scrollX": true,
		    	"scrollY": true,
		        "scrollCollapse": true,
		        "language": {
		    		"url": "./language/<?php echo $_SESSION['language'];?>
/dataTables.lang"
		    	}
		    } );
		} );
		<?php echo '</script'; ?>
>
		<p class="text-center text-warning">##PRICE_INFO##</p>
	</div>
</div>
<?php } else { ?>
<h3 class="my-3">##PRICES1000##</h3>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm table-hover table-bordered table-striped" id="bestPrices">
			<thead>
				<tr>
					<th class="text-left">##STOCK##</th>
					<th class="text-left">##SELLTRIGGER##</th>
					<th class="text-left">##MIN_PRICE##</th>
					<th class="text-left">##MAX_PRICE##</th>
					<th class="text-left">##BEST_PRICE##</th>
					<th class="text-center">##PERCENT##</th> <?php if ($_smarty_tpl->tpl_vars['options']->value['farmId'] > 0) {?>
					<th class="text-left">##STOCKS##</th>
					<th class="text-left">##PROCEEDS##</th> <?php }?>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prices']->value, 'fillTypeData', false, 'fillType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fillType']->value => $_smarty_tpl->tpl_vars['fillTypeData']->value) {
?> <?php echo smarty_function_math(array('equation'=>"round(100 / max * current)",'max'=>$_smarty_tpl->tpl_vars['fillTypeData']->value['maxPrice']-$_smarty_tpl->tpl_vars['fillTypeData']->value['minPrice']+0.0001,'current'=>$_smarty_tpl->tpl_vars['fillTypeData']->value['bestPrice']-$_smarty_tpl->tpl_vars['fillTypeData']->value['minPrice']+0.0001,'assign'=>"percent"),$_smarty_tpl);?>

				<tr>
					<td class="text-left col-1 pr-3 w-13"><?php echo $_smarty_tpl->tpl_vars['fillType']->value;?>
</td>
					<td class="text-left col-1 pr-3 w-13"><?php echo $_smarty_tpl->tpl_vars['fillTypeData']->value['bestLocation'];?>
</td>
					<td class="text-right col-1 pr-3 w-13"><?php echo number_format($_smarty_tpl->tpl_vars['fillTypeData']->value['minPrice'],0,",",".");?>
</td>
					<td class="text-right col-1 pr-3 w-13"><?php echo number_format($_smarty_tpl->tpl_vars['fillTypeData']->value['maxPrice'],0,",",".");?>
</td>
					<td class="text-right col-1 pr-3 w-13 <?php if ($_smarty_tpl->tpl_vars['fillTypeData']->value['greatDemand']) {?>text-info<?php } elseif ($_smarty_tpl->tpl_vars['percent']->value >= 60) {?>text-success<?php } elseif ($_smarty_tpl->tpl_vars['percent']->value <= 40) {?>text-danger<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['fillTypeData']->value['bestPrice'],0,",",".");?>
 <?php if ($_smarty_tpl->tpl_vars['fillTypeData']->value['priceTrend'] == 1) {?> <i class="fas fa-caret-up text-success"></i> <?php } elseif ($_smarty_tpl->tpl_vars['fillTypeData']->value['priceTrend'] == -1) {?> <i class="fas fa-caret-down text-danger"></i> <?php } else { ?> <i class="fas fa-caret-down" style="visibility: hidden"></i> <?php }?>
					</td>
					<td class="text-right col-1 pr-3 w-9"><?php echo number_format($_smarty_tpl->tpl_vars['percent']->value,0,",",".");?>
 %</td> <?php if ($_smarty_tpl->tpl_vars['options']->value['farmId'] > 0) {
if (isset($_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value]) && $_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value]['overall'] > 0) {?>
					<td class="text-right col-1 pr-3 w-13"><?php echo number_format($_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value]['overall'],0,",",".");?>
</td> <?php echo smarty_function_math(array('equation'=>"overall * bestPrice / 1000",'overall'=>$_smarty_tpl->tpl_vars['commodities']->value[$_smarty_tpl->tpl_vars['fillType']->value]['overall'],'bestPrice'=>$_smarty_tpl->tpl_vars['fillTypeData']->value['bestPrice'],'assign'=>"proceeds"),$_smarty_tpl);?>

					<td class="text-right col-1 pr-3 w-13"><?php echo number_format($_smarty_tpl->tpl_vars['proceeds']->value,0,",",".");?>
</td> <?php } else { ?>
					<td></td>
					<td></td> <?php }
}?>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php echo '<script'; ?>
>
			var h = window.innerHeight; //Height of the HTML document
			<?php if ($_smarty_tpl->tpl_vars['options']->value['hideFooter']) {?>
			var c = 230; // Sum of the heights of navbar, footer, headings, etc.
			<?php } else { ?>
			var c = 325; // Sum of the heights of navbar, footer, headings, etc.
			<?php }?> 
			var th = parseInt((h-c)/h*100) + 'vh'; // Height for table 
			var rw = parseInt((h - c) / 30); // Rows when paging is activated
			$(document).ready(function() { 
				var table = $('#bestPrices').DataTable( { 
					//"pageLength": rw, 
					scrollY: true, 
					scrollX: "98%", 					
					scrollCollapse: true, 
					paging:	false, 
					stateSave: true, 
					"dom": "<'row'<'col-sm-12'tr>>", 
					"language": { 
						"decimal": ",", 
						"thousands": ".", 
						"url": "./language/<?php echo $_SESSION['language'];?>
/dataTables.lang" 
					}
				} ); 
			} );
		<?php echo '</script'; ?>
>
	</div>
</div>
<?php }
}
}
