<?php
/* Smarty version 3.1.33, created on 2019-07-11 17:26:48
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/missions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d275538eea851_50124218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab776e2ac45dfb3f81f378a4e07e641ced4261f' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/missions.tpl',
      1 => 1562858794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d275538eea851_50124218 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="my-3">##MISSIONS##</h3>
<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm table-hover table-bordered table-striped" id="missions" width="100%">
			<thead>
				<tr>
					<th class="text-center">##FIELD##</th>
					<th class="text-center">##FIELDSIZE##</th>
					<th class="text-center">##TYPE##</th>
					<th class="text-center">##REWARD##</th>
					<th class="text-center">##VEHICLEUSECOST##</th>
					<th class="text-center">##FARM##</th>
					<th class="text-center">##STATUS##</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missions']->value, 'mission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mission']->value) {
?>
				<tr>
					<td class="text-right w-13"><?php if (isset($_smarty_tpl->tpl_vars['mission']->value['field'])) {
echo $_smarty_tpl->tpl_vars['mission']->value['field'];
}?></td>
					<td class="text-right w-17"><?php if (isset($_smarty_tpl->tpl_vars['mission']->value['field'])) {
echo number_format($_smarty_tpl->tpl_vars['mission']->value['fieldSize'],2,",",".");
}?></td>
					<td class="text-left w-17"><?php echo $_smarty_tpl->tpl_vars['mission']->value['type'];
if ($_smarty_tpl->tpl_vars['mission']->value['type'] == '##MIS_HARVEST##' || $_smarty_tpl->tpl_vars['mission']->value['type'] == '##MIS_MOW_BALE##') {?> (<?php echo $_smarty_tpl->tpl_vars['mission']->value['fruitTypeName'];?>
)<?php }?></td>
					<td class="text-right w-13"><?php echo number_format($_smarty_tpl->tpl_vars['mission']->value['reward'],0,",",".");?>
</td>
					<td class="text-right w-13"><?php if (isset($_smarty_tpl->tpl_vars['mission']->value['field'])) {
echo number_format($_smarty_tpl->tpl_vars['mission']->value['vehicleUseCost'],0,",",".");
}?></td>
					<td class="text-left w-13"><?php if (isset($_smarty_tpl->tpl_vars['mission']->value['farmId'])) {
echo $_smarty_tpl->tpl_vars['farms']->value[$_smarty_tpl->tpl_vars['mission']->value['farmId']]['name'];
}?></td>
					<td class="text-left w-13"><?php if ($_smarty_tpl->tpl_vars['mission']->value['success']) {?>##ABGESCHLOSSEN##<?php } elseif ($_smarty_tpl->tpl_vars['mission']->value['status']) {?>##ACTIVE##<?php }?></td>
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
		var c = 335; 							// Sum of the heights of navbar, footer, headings, etc.  
		var th = parseInt((h-c)/h*100) + 'vh';	// Height for table
		var rw = parseInt((h - c) / 30);		// Rows when paging is activated
		$(document).ready(function() {
		    var table = $('#missions').DataTable( {
		    	//"pageLength": rw,
		    	order: 			[[ 3, "desc" ]],
		    	scrollY:        true,
		    	scrollX:        true,				
        		scrollCollapse: true,
       			paging:         false,
		    	stateSave:		true,
		    	"dom":	"<'row'<'col-sm-12'tr>><'row mt-3'<'col-sm-6'><'col-sm-6'f>>", // cut from end: <'row'<'col-sm-5'i><'col-sm-7'p>>		
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
</div><?php }
}
