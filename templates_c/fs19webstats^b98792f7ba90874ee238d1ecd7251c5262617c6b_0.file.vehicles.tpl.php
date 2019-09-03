<?php
/* Smarty version 3.1.33, created on 2019-07-11 17:11:32
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/vehicles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2751a4054cf4_78928246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b98792f7ba90874ee238d1ecd7251c5262617c6b' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/vehicles.tpl',
      1 => 1562857877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2751a4054cf4_78928246 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['subPage']->value == 'vehicles') {?>
<h3 class="my-3">##VEH_VEHICLES##</h3>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm table-hover display table-bordered table-striped" id="vehicles">
			<thead>
				<tr>
					<!-- <th class="text-center">##VEH_BRAND##</th> -->
					<th class="text-center">##VEH_NAME##</th>
					<th class="text-center">##VEH_AGE##</th>
					<th class="text-center">##VEH_WEAR##</th>
					<th class="text-center">##VEH_OTIME##</th>
					<th class="text-center">##VEH_RESALE##</th>
					<th class="text-center">##VEH_LPDAY##</th>
					<th class="text-center">##VEH_LPHOUR##</th>
					<th class="text-center">##VEH_LCOST##</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vehicles']->value, 'vehicle', false, 'vehicleId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vehicleId']->value => $_smarty_tpl->tpl_vars['vehicle']->value) {
?>
				<tr>
					<!-- <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['brand'];?>
</td> -->
					<td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['vehicle']->value['name'];?>
</td>
					<td class="text-right pr-3"><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['age'];?>
</td>
					<td class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['wear'],0);?>
%</td>
					<td data-order="<?php echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['operatingTime'],0," ,",".");?>
" class="text-right pr-3"><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['operatingTimeString'];?>
</td>
					<td data-order="<?php if ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 1) {
echo $_smarty_tpl->tpl_vars['vehicle']->value['resale'];
} else { ?>0<?php }?>" class="text-right pr-3"><?php if ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 1) {
echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['resale'],0,",",".");
} elseif ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 3) {?>Mission<?php }?></td>
					<td class="text-right pr-3"><?php if ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 2) {
echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['dayLeasingCost'],0,",",".");
}?></td>
					<td class="text-right pr-3"><?php if ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 2) {
echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['leasingCostPerHour'],0,",",".");
}?></td>
					<td class="text-right pr-3"><?php if ($_smarty_tpl->tpl_vars['vehicle']->value['propertyState'] == 2) {
echo number_format($_smarty_tpl->tpl_vars['vehicle']->value['leasingCost'],0,",",".");
}?></td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php echo '<script'; ?>
>
		var h = window.innerHeight; 			//Height of the HTML document
		var c = 285; 							// Sum of the heights of navbar, footer, headings, etc.  
		var th = parseInt((h-c)/h*100) + 'vh';	// Height for table
		var rw = parseInt((h - c) / 30);		// Rows when paging is activated
		$(document).ready(function() {
		    var table = $('#vehicles').DataTable( {
		    	//"pageLength": rw,
		    	scrollY:        true,
				scrollX:        true, 					
        		scrollCollapse: true,
       			paging:         false,
		    	stateSave:		true,
		    	"dom":	"<'row'<'col-sm-12'tr>>", // cut from beginn: <'row'<'col-sm-6'><'col-sm-6'f>> cut from end: <'row'<'col-sm-5'i><'col-sm-7'p>>		
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
<?php } elseif ($_smarty_tpl->tpl_vars['subPage']->value == 'buildings') {?>
<h3 class="my-3">##VEH_BUILDINGS##</h3>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm table-hover display table-bordered table-striped" id="buildings">
			<thead>
				<tr>
					<th class="text-center">##VEH_BNAME##</th>
					<th class="text-center">##VEH_AGE##</th>
					<th class="text-center">##VEH_PRICE##</th>
					<th class="text-center">##VEH_RESALE##</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buildings']->value, 'building', false, 'buildingId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['buildingId']->value => $_smarty_tpl->tpl_vars['building']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['building']->value['name'];?>
</td>
					<td class="text-right pr-3"><?php echo $_smarty_tpl->tpl_vars['building']->value['age'];?>
</td>
					<td class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['building']->value['price'],0,",",".");?>
</td>
					<td data-order="<?php echo $_smarty_tpl->tpl_vars['building']->value['resale'];?>
" class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['building']->value['resale'],0,",",".");?>
</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<?php echo '<script'; ?>
>
		var h = window.innerHeight; 			//Height of the HTML document
		var c = 285; 							// Sum of the heights of navbar, footer, headings, etc.  
		var th = parseInt((h-c)/h*100) + 'vh';	// Height for table
		var rw = parseInt((h - c) / 30);		// Rows when paging is activated
		$(document).ready(function() {
		    var table = $('#buildings').DataTable( {
		    	//"pageLength": rw,
		    	scrollY:        true,
        		scrollCollapse: true,
       			paging:         false,
		    	stateSave:		true,
		    	"dom":	"<'row'<'col-sm-12'tr>>", // cut from beginn: <'row'<'col-sm-6'><'col-sm-6'f>> cut from end: <'row'<'col-sm-5'i><'col-sm-7'p>>		
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
