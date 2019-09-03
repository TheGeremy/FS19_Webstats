<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:48:34
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/finances.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4a02d20e40_03325914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355ac47022e6bb1719c064f189544108f6dd367e' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/finances.tpl',
      1 => 1562148669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1e4a02d20e40_03325914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('mode', GetParam('subPage','G','5dayhistory'));?> <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'balance') {?>
<h3 class="my-3">##BS_HEAD_MAIN## "<?php echo $_smarty_tpl->tpl_vars['farmName']->value;?>
"</h3>
<div class="row">
	<div class="col-md-6 order-1 border-right border-dark mt-3">
		<h5>##BS_HEAD_LEFT##</h5>
		<div class="row border-top pt-2 border-dark">
			<div class="col-9">
				<ul class="list-unstyled">
					<li><span class="h5">##BS_FIXED##</span>
						<ol>
							<li>##BS_LAND##</li>
							<li>##BS_BUILDINGS##</li>
							<li>##BS_VEHICLES##</li>
							<li class="nostyle border-top">##BS_SUM_FIXED##</li>
						</ol></li>
					<li><span class="h5">##BS_ANIMAL##</span>
						<ol>
							<li>##BS_HORSES##</li>
							<li>##BS_COWS##</li>
							<li>##BS_PIGS##</li>
							<li>##BS_SHEEPS##</li>
							<li>##BS_CHICKEN##</li>
							<li class="nostyle border-top text-bold">##BS_SUM_ANIMAL##</li>
						</ol></li>
					<li><span class="h5">##BS_CURRENT##</span>
						<ul class="list-unstyled ml-4">
							<li>##BS_INVENTORY##
								<ol>
									<li>##BS_SUPPLIES##</li>
									<!-- <li>Feldinventar</li> -->
									<li>##BS_STORAGE##</li>
								</ol>
							</li>
							<li>##BS_ACCRECEIV##</li>
							<li>##BS_CASH##</li>
							<li class="nostyle border-top text-bold">##BS_SUM_CURRENT##</li>
						</ul></li>
				</ul>
			</div>
			<div class="col-3">
				<ul class="list-unstyled">
					<li><span class="h5">&nbsp;</span></li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['A1'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['A2'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['A3'],0,",",".");?>
</li>
					<li class="text-right pr-3 border-top"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['A1']+$_smarty_tpl->tpl_vars['assets']->value['A2']+$_smarty_tpl->tpl_vars['assets']->value['A3'],0,",",".");?>
</li>
					<li><span class="h5">&nbsp;</span></li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B1'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B2'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B3'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B4'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B5'],0,",",".");?>
</li>
					<li class="text-right pr-3 border-top"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['B1']+$_smarty_tpl->tpl_vars['assets']->value['B2']+$_smarty_tpl->tpl_vars['assets']->value['B3']+$_smarty_tpl->tpl_vars['assets']->value['B4']+$_smarty_tpl->tpl_vars['assets']->value['B5'],0,",",".");?>
</li>
					<li><span class="h5">&nbsp;</span></li>
					<li>&nbsp;</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['CI1'],0,",",".");?>
</li>
					<!-- <li class="text-right pr-3"><?php if (isset($_smarty_tpl->tpl_vars['assets']->value['CI2'])) {
echo number_format($_smarty_tpl->tpl_vars['assets']->value['CI2'],0,",",".");
}?></li> -->
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['CI3'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['CII'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['CIII'],0,",",".");?>
</li>
					<li class="text-right pr-3 border-top"><?php echo number_format($_smarty_tpl->tpl_vars['assets']->value['CI1']+$_smarty_tpl->tpl_vars['assets']->value['CI3']+$_smarty_tpl->tpl_vars['assets']->value['CII']+$_smarty_tpl->tpl_vars['assets']->value['CIII'],0,",",".");?>
</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-6 order-3 order-md-2 mt-3">
		<h5 class="text-right">##BS_HEAD_RIGHT##</h5>
		<div class="row border-top pt-2 border-dark">
			<div class="col-9">
				<ul class="list-unstyled">
					<li><span class="h5">##BS_SHAREHOLDERS_EQUITY##</span></li>
					<ol>
						<li>##BS_INITIAL##</li>
						<li>##BS_PROFIT##</li>
						<li class="nostyle border-top text-bold">##BS_SUM_SHAREHOLDERS_EQUITY##</li>
					</ol>
					<li><span class="h5">##BS_LIABILITIES##</span></li>
					<ol>
						<li>##BS_BANKDEBT##</li>
						<li>##BS_BANKOPCREDIT##</li>
						<li class="nostyle border-top text-bold">##BS_SUM_LIABILITIES##</li>
					</ol>
				</ul>
			</div>
			<div class="col-3">
				<ul class="list-unstyled">
					<li><span class="h5">&nbsp;</span></li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['A1'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['A2'],0,",",".");?>
</li>
					<li class="text-right pr-3 border-top"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['A1']+$_smarty_tpl->tpl_vars['liabilities']->value['A2'],0,",",".");?>
</li>
					<li><span class="h5">&nbsp;</span></li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['B1'],0,",",".");?>
</li>
					<li class="text-right pr-3"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['B2'],0,",",".");?>
</li>
					<li class="text-right pr-3 border-top"><?php echo number_format($_smarty_tpl->tpl_vars['liabilities']->value['B1']+$_smarty_tpl->tpl_vars['liabilities']->value['B2'],0,",",".");?>
</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="col-md-6 d-none d-lg-block border-right border-top border-bottom border-dark"> -->
	<div class="col-md-6 order-2 order-md-3 border-right border-top border-bottom border-dark">
		<div class="row">
			<div class="col-9">
				<p class="h5 pt-1">##BS_TOTAL_LEFT##</p>
			</div>
			<div class="col-3">
				<p class="h5 text-right pr-3 pt-1"><?php echo number_format($_smarty_tpl->tpl_vars['balanceSheetSum']->value,0,",",".");?>
</p>
			</div>
		</div>
	</div>
	<div class="col-md-6 order-4 border-top border-bottom border-dark">
		<div class="row">
			<div class="col-9">
				<p class="h5 pt-1">##BS_TOTAL_RIGHT##</p>
			</div>
			<div class="col-3">
				<p class="h5 text-right pr-3 pt-1"><?php echo number_format($_smarty_tpl->tpl_vars['balanceSheetSum']->value,0,",",".");?>
</p>
			</div>
		</div>
	</div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'ratios') {?>
<h3 class="my-3">##BUSINESS_RATIOS##</h3>
<div class="row mt-3">
	<div class="col-6">
		<h5>
			##BWL_ADG## <a href="#BWLADG" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['adg'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLADG">
			<p class="text-justify">##BWL_ADG_P1##</p>
			<p>
				<var>##BWL_ADG##</var>
				=
				<var>##BWL_EK##</var>
				x 100 :
				<var>##BWL_AV##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_ADG_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_EKQ## <a href="#BWLEKQ" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['ekq'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLEKQ">
			<p class="text-justify">##BWL_EKQ_P1##</p>
			<p>
				<var>##BWL_EKQ##</var>
				=
				<var>##BWL_EK##</var>
				x 100 :
				<var>##BWL_GK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_EKQ_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_EKR## <a href="#BWLEKR" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['ekr'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLEKR">
			<p class="text-justify">##BWL_EKR_P1##</p>
			<p>
				<var>##BWL_EKR##</var>
				=
				<var>##BWL_G##</var>
				x 100 :
				<var>##BWL_EK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_EKR_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_FKQ## <a href="#BWLFKQ" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['fkq'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLFKQ">
			<p class="text-justify">##BWL_FKQ_P1##</p>
			<p>
				<var>##BWL_FKQ##</var>
				=
				<var>##BWL_FK##</var>
				x 100 :
				<var>##BWL_GK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_FKQ_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_FKD## <a href="#BWLFK" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['fkd'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLFK">
			<p class="text-justify">##BWL_FKD_P1##</p>
			<p>
				<var>##BWL_FKD##</var>
				= (
				<var>##BWL_AAV##</var>
				+
				<var>##BWL_TV##</var>
				+
				<var>##BWL_UV##</var>
				) x 100 :
				<var>##BWL_FK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_FKD_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_L## <a href="#BWLL" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['l3g'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLl">
			<p class="text-justify">##BWL_L_P1##</p>
			<p>
				<var>##BWL_L##</var>
				=
				<var>##BWL_UV##</var>
				x 100 :
				<var>##BWL_FK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_L_P2##</p>
	</div>
	<div class="col-6">
		<h5>
			##BWL_GKR## <a href="#BWLGKR" data-toggle="collapse" class="small">Details</a><span class="float-right"><?php echo number_format($_smarty_tpl->tpl_vars['ratios']->value['gkr'],0,",",".");?>
 %</span>
		</h5>
		<div class="collapse" id="BWLGKR">
			<p class="text-justify">##BWL_GKR_P1##</p>
			<p>
				<var>##BWL_GKR##</var>
				= (
				<var>##BWL_G##</var>
				+
				<var>##BWL_KZ##</var>
				) x 100 :
				<var>##BWL_EK##</var>
			</p>
		</div>
		<p class="text-justify">##BWL_GKR_P2##</p>
	</div>
	<div class="col-12">
		<p class="text-center">
			##BWL_COPYRIGHT## <a href="https://debitoor.de/lexikon">debitor</a>
		</p>
	</div>
</div>
<?php } else { ?>
<h3 class="my-3">##FINANCES_SUM##</h3>
<div class="row">
	<div class="col-sm-12">
		<table id="finances" class="table table-sm table-hover table-bordered table-striped" width="100%">
			<thead>
				<tr>
					<th>##INCOME_EXPENDITURE##</th>
					<?php if ($_smarty_tpl->tpl_vars['currentDay']->value-4 >= 1) {?>
					<th class="text-right">##<?php echo $_smarty_tpl->tpl_vars['weekdays']->value[($_smarty_tpl->tpl_vars['currentDay']->value-4)%7];?>
##</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['currentDay']->value-3 >= 1) {?>
					<th class="text-right">##<?php echo $_smarty_tpl->tpl_vars['weekdays']->value[($_smarty_tpl->tpl_vars['currentDay']->value-3)%7];?>
##</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['currentDay']->value-2 >= 1) {?>
					<th class="text-right">##<?php echo $_smarty_tpl->tpl_vars['weekdays']->value[($_smarty_tpl->tpl_vars['currentDay']->value-2)%7];?>
##</th>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['currentDay']->value-1 >= 1) {?>
					<th class="text-right">##<?php echo $_smarty_tpl->tpl_vars['weekdays']->value[($_smarty_tpl->tpl_vars['currentDay']->value-1)%7];?>
##</th>
					<?php }?>
					<th class="text-right">##TODAY##</th>
				</tr>
			</thead>
			<?php $_smarty_tpl->_assignInScope('days', $_smarty_tpl->tpl_vars['currentDay']->value >= 5 ? 4 : $_smarty_tpl->tpl_vars['currentDay']->value-1);?>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['financeElements']->value, 'category', false, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
				<tr>
					<td>##<?php echo strtoupper($_smarty_tpl->tpl_vars['element']->value);?>
##</td> <?php
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['day']->step = -1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? 0+1 - ($_smarty_tpl->tpl_vars['days']->value) : $_smarty_tpl->tpl_vars['days']->value-(0)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = $_smarty_tpl->tpl_vars['days']->value, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration === 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration === $_smarty_tpl->tpl_vars['day']->total;?>
					<td class="text-right w-13"><?php echo number_format($_smarty_tpl->tpl_vars['financeHistory']->value[$_smarty_tpl->tpl_vars['day']->value][$_smarty_tpl->tpl_vars['element']->value],2,",",".");?>
</td> <?php }
}
?>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
			<tfoot>
				<tr>
					<th>##TOTAL## </th> <?php
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['day']->step = -1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? 0+1 - ($_smarty_tpl->tpl_vars['days']->value) : $_smarty_tpl->tpl_vars['days']->value-(0)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = $_smarty_tpl->tpl_vars['days']->value, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration === 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration === $_smarty_tpl->tpl_vars['day']->total;?>
					<th class="text-right w-13"><?php echo number_format($_smarty_tpl->tpl_vars['financeHistory']->value[$_smarty_tpl->tpl_vars['day']->value]['total'],0,",",".");?>
 €</th> <?php }
}
?>
				</tr>		
			</tfoot>
		</table>
		<table class="table table-sm table-hover table-bordered table-striped w-100">
				<tr>
					<td class="text-right w-50"><strong>##BALANCE1##:</strong></td>
					<td class="text-center w-50"><strong><?php echo number_format($_smarty_tpl->tpl_vars['money']->value,0,",",".");?>
 €</strong></td>
				</tr>
				<tr>
					<td class="text-right w-50"><strong>##LOAN##:</strong></td>
					<td class="text-center w-50 <?php if ($_smarty_tpl->tpl_vars['money']->value-$_smarty_tpl->tpl_vars['loan']->value < 0) {?>text-danger<?php } else { ?>text-success<?php }?>"><strong><?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['loan']->value,0,",",".");
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 €</strong></td>
				</tr>	
				<tr>
					<td class="text-right w-50"><strong>##BALANCE2##:</strong></td>
					<td class="text-center w-50 <?php if ($_smarty_tpl->tpl_vars['money']->value-$_smarty_tpl->tpl_vars['loan']->value < 0) {?>text-danger<?php } else { ?>text-success<?php }?>"><strong><?php echo number_format(($_smarty_tpl->tpl_vars['money']->value-$_smarty_tpl->tpl_vars['loan']->value),0,",",".");?>
 €</strong></td>
				</tr>		
        </table>
		<?php echo '<script'; ?>
>
		var rows = parseInt(($( window ).height() - 250) / 36);
		$(document).ready(function() {
		    var table = $('#finances').DataTable( {
		        scrollY:        false,
		        "ordering": false,
		        "dom":"<'row'<'col-sm-12'tr>>",
		        scrollX:        true,
		        scrollCollapse: true,
		        paging:         false,
		        fixedColumns:   true,
				overflow: hidden,
		    } );
		    var table = $('#bestPrices').DataTable( {
		    	"pageLength": rows,
		    	"dom":	"<'row'<'col-sm-6'><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",		
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
