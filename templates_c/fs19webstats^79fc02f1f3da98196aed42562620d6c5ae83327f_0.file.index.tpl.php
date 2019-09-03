<?php
/* Smarty version 3.1.33, created on 2019-07-04 20:41:59
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d1e4877b85bb0_80822481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79fc02f1f3da98196aed42562620d6c5ae83327f' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/index.tpl',
      1 => 1562149014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5d1e4877b85bb0_80822481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, '../style.cfg', null, 0);
?>

<html lang="cs-CZ">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Farming Simulator 19 Web Stats">
<meta name="author" content="John Hawk">
<link rel="icon" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'IMAGES');?>
/favicon.ico">
<title><?php echo $_smarty_tpl->tpl_vars['map']->value['Short'];?>
 <?php echo $_smarty_tpl->tpl_vars['map']->value['Version'];?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/customstyle.css?<?php echo time();?>
">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/datatables.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SCRIPTS');?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SCRIPTS');?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SCRIPTS');?>
/datatables.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<header>
		<?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</header>
	<div class="container" >
		<?php if ($_smarty_tpl->tpl_vars['serverOnline']->value) {
$_smarty_tpl->_assignInScope('fullPathToTemplate', "./styles/".((string)$_smarty_tpl->tpl_vars['style']->value)."/templates/".((string)$_smarty_tpl->tpl_vars['page']->value).".tpl");?> <?php if (file_exists($_smarty_tpl->tpl_vars['fullPathToTemplate']->value)) {?> <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?> <?php } else { ?>
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<h1>##TPL_ERROR_1##</h1>
				<p class="lead">##TPL_ERROR_2## <?php echo $_smarty_tpl->tpl_vars['fullPathToTemplate']->value;?>
 ##TPL_ERROR_3##</p>
			</div>
		</div>
		<?php }
} else { ?>
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<h1>##CON_ERROR_1##</h1>
				<p class="lead">##CON_ERROR_2##</p>
			</div>
		</div>
		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['hideFooter']->value) {?>
	<div class="navbar navbar-default navbar-fixed-bottom hidden-xs">
		<div class="container">
			<p class="navbar-text text-center">##USER_ONLINE##: <?php echo $_smarty_tpl->tpl_vars['onlineUser']->value;?>
</p>
			<p class="navbar-text pull-right">
				&copy; 2018-2019 <b>FS19 Web Stats</b> ##CREATED_BY## <b>John Hawk</b> ##EDITED_BY## <b>the.geremy</b>
			</p>
		</div>
	</div>
	<?php }?>
	<?php echo '<script'; ?>
 type="text/javascript">
	function clickDropdown() {
		if ($('.navbar-toggler').css("display") === "none") {
			$('.dropdown-toggle').click(function () {
	            window.location.href = $(this).attr('href');
	            return false;
	        });
	    }
	}    
	$(document).ready(function () {
	    clickDropdown();
	    $(window).resize(function () {
	        clickDropdown();
	    });
	});
	<?php if ($_smarty_tpl->tpl_vars['reloadPage']->value && $_smarty_tpl->tpl_vars['serverOnline']->value) {?>
	var time = new Date().getTime();
	$(document.body).bind("mousemove keypress", function () {
	    time = new Date().getTime();
	});

	setInterval(function() {
	    if (new Date().getTime() - time >= 60000) {
	        window.location.reload(true);
	    }
	}, 1000);
	<?php }?>
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
