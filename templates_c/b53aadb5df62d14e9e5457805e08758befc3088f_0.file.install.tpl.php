<?php
/* Smarty version 3.1.33, created on 2019-07-15 11:46:28
  from '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2c4b74717797_87008855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b53aadb5df62d14e9e5457805e08758befc3088f' => 
    array (
      0 => '/volume2/web/FS19_Webstats/styles/fs19webstats/templates/install.tpl',
      1 => 1555356434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2c4b74717797_87008855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, '../style.cfg', null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Farming Simulator 19 WebStats">
<meta name="author" content="John Hawk">
<link rel="icon" href="./images/favicon.ico">
<title>FS19 Web Stats</title>
<link href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/theme.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'CSS');?>
/customstyle.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SCRIPTS');?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SCRIPTS');?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="index.php">&nbsp;&nbsp;FS19 Web Stats&nbsp;&nbsp;</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="##TOGGLE##">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<form class="form-inline ml-auto" action="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" method="post">
				<span class="navbar-text">##CHOOSE_LANGUAGE_LABEL##:</span> <select class="form-control mx-sm-2" name="language"> <?php
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
				<button type="submit" name="submit" value="language" class="btn btn-success">##CHANGE_BUTTON##</button>
				<span class="navbar-text ml-sm-2">##CHOOSE_STYLE##:</span> <select class="form-control mx-sm-2" name="style"> <?php
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
				<button type="submit" name="submit" value="style" class="btn btn-success">##CHANGE_BUTTON##</button>
			</form>
		</div>
	</nav>
	<main role="main"> <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
	<div class="jumbotron">
		<div class="container">
			<h1>Farming Simulator 19 Web Stats</h1>
			<p>##CONFIG_SAVED##</p>
			<p>
				<a class="btn btn-primary btn-lg" href="index.php" role="button">##CONTINUE## &raquo;</a>
			</p>
		</div>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'start') {?>
	<div class="jumbotron">
		<div class="container">
			<h1>Farming Simulator 19 Web Stats</h1>
			<hr class="my-4">
			<p class="lead">##DESCRIPTON##</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>##HEAD_API##</h2>
				<p>##DESCR_API##</p>
				<p>
					<a class="btn btn-secondary" href="index.php?mode=api" role="button">##START_INSTALL## &raquo;</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>##HEAD_FTP##</h2>
				<p>##DESCR_FTP##</p>
				<p>
					<a class="btn btn-secondary" href="index.php?mode=ftp" role="button">##START_INSTALL## &raquo;</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>##HEAD_LOCAL##</h2>
				<p>##DESCR_LOCAL##</p>
				<p>
					<a class="btn btn-secondary" href="index.php?mode=local" role="button">##START_INSTALL## &raquo;</a>
				</p>
			</div>
		</div>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'api') {?>
	<div class="container">
		<h3 class="mt-3">##INSTALL_TITLE## ##HEAD_API##</h3>
		<form class="form-horizontal" action="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" method="post">
			<?php if ($_smarty_tpl->tpl_vars['fsockopen']->value) {?> <?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
			<div class="form-group">
				<label for="Server-IP" class="col-sm-3 control-label">##DS_LABEL1##</label>
				<div class="col-sm-7">
					<input type="ip" name="serverip" class="form-control" id="Server-IP" placeholder="##DS_PLACEHOLDE1##" <?php if (isset($_smarty_tpl->tpl_vars['postdata']->value['serverIp'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['postdata']->value['serverIp'];?>
"<?php }?>> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK1##</span>
				</div>
			</div>
			<div class="form-group">
				<label for="Server-Port" class="col-sm-3 control-label">##DS_LABEL2##</label>
				<div class="col-sm-7">
					<input type="text" name="serverport" class="form-control" id="Server-Port" placeholder="##DS_PLACEHOLDE2##" <?php if (isset($_smarty_tpl->tpl_vars['postdata']->value['serverPort'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['postdata']->value['serverPort'];?>
"<?php }?>> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK2##</span>
				</div>
			</div>
			<div class="form-group">
				<label for="Server-Code" class="col-sm-3 control-label">##DS_LABEL3##</label>
				<div class="col-sm-7">
					<input type="text" name="servercode" class="form-control" id="Server-Code" placeholder="##DS_PLACEHOLDE3##" <?php if (isset($_smarty_tpl->tpl_vars['postdata']->value['serverCode'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['postdata']->value['serverCode'];?>
"<?php }?>> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK3##</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">##DS_LABEL4##</label>
				<div class="col-sm-7">
					<select class="form-control" id="map" name="map"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maps']->value, 'mapData', false, 'mapDir');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mapDir']->value => $_smarty_tpl->tpl_vars['mapData']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['mapDir']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mapData']->value['Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mapData']->value['Version'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select><span id="helpBlock" class="help-block">##DS_HELP_BLOCK4##</span>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">##DS_LABEL5##</label>
				<div class="col-sm-7 form-inline">
					<input type="password" name="adminpass1" class="form-control" id="password" placeholder="##DS_PLACEHOLDE5##">&nbsp;<input type="password" name="adminpass2" class="form-control" id="password" placeholder="##DS_PLACEHOLDE6##"> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK5##</span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-7 col-sm-3">
					<button type="submit" name="submit" value="gameSettings" class="pull-right btn btn-primary btn-block">##SAVE_CONFIG##</button>
				</div>
			</div>
			<?php } else { ?>
			<p class="lead">##NO_INSTALL_1##</p>
			<p class="lead">##NO_INSTALL_2##</p>
			<?php }?>
		</form>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'ftp') {?>
	<div class="container">
		<h3 class="mt-3">##INSTALL_TITLE## ##HEAD_FTP##</h3>
		<form class="form-horizontal" action="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" method="post">
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
			<div class="form-group row">
				<label for="ftpserver" class="col-sm-3 col-form-label">##FTPADRESS##</label>
				<div class="col-sm-7">
					<input type="ip" class="form-control" id="ftpserver" name="ftpserver" placeholder="0.0.0.0">
				</div>
			</div>
			<div class="form-group row">
				<label for="ftpport" class="col-sm-3 col-form-label">##FTPPORT##</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="ftpport" name="ftpport" placeholder="21">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-3">##FTPOPTIONS##</div>
				<div class="col-sm-7">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="ftpssl" name="ftpssl"> <label class="form-check-label pl-1" for="ftpssl">##FTPSSLCON##</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" id="ftpgportal" name="ftpgportal"> <label class="form-check-label pl-1" for="ftpgportal">G-Portal Game Server</label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="ftppath" class="col-sm-3 col-form-label">##FTPPATH##</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="ftppath" name="ftppath" placeholder="/folder/subfolder/">
				</div>
			</div>
			<div class="form-group row">
				<label for="ftpuser" class="col-sm-3 col-form-label">##FTPUSER##</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="ftpuser" name="ftpuser">
				</div>
			</div>
			<div class="form-group row">
				<label for="ftppass" class="col-sm-3 col-form-label">##FTPPASSWORD##</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="ftppass" name="ftppass">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 control-label">##DS_LABEL4##</label>
				<div class="col-sm-7">
					<select class="form-control" id="map" name="map"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maps']->value, 'mapData', false, 'mapDir');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mapDir']->value => $_smarty_tpl->tpl_vars['mapData']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['mapDir']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mapData']->value['Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mapData']->value['Version'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select><span id="helpBlock" class="help-block">##DS_HELP_BLOCK4##</span>
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-3 control-label">##DS_LABEL5##</label>
				<div class="col-sm-7 form-inline">
					<input type="password" name="adminpass1" class="form-control" id="password" placeholder="##DS_PLACEHOLDE5##">&nbsp;<input type="password" name="adminpass2" class="form-control" id="password" placeholder="##DS_PLACEHOLDE6##"> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK5##</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-offset-7 col-sm-3">
					<button type="submit" name="submit" value="gameSettings" class="pull-right btn btn-primary btn-block">##SAVE_CONFIG##</button>
				</div>
			</div>
		</form>
	</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'local') {?>
	<div class="container">
		<h3 class="mt-3">##INSTALL_TITLE## ##HEAD_LOCAL##</h3>
		<form class="form-horizontal" action="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" method="post">
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
			<p>
				##INTRO1## <a href="https://www.farming-simulator.com/mod.php?lang=de&country=de&mod_id=50533&title=fs2017">##LINK_TEXT##</a>##INTRO2##
			</p>
			<input type="file" name="file" style="visibility: hidden;" id="path2savegame" />
			<div class="form-group">
				<label for="savepath" class="col-sm-3 control-label">##LS_LABEL1##</label>
				<div class="col-sm-7">
					<input type="text" name="savepath" class="form-control" id="savepath" placeholder="##LS_PLACEHOLDE1##" <?php if (isset($_smarty_tpl->tpl_vars['postdata']->value['path']) > 0) {?>value="<?php echo $_smarty_tpl->tpl_vars['postdata']->value['path'];?>
"<?php }?>> <span id="helpBlock" class="help-block">##LS_HELP_BLOCK1##</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">##LS_LABEL2##</label>
				<div class="col-sm-7">
					<select class="form-control" id="map" name="map"> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['maps']->value, 'mapData', false, 'mapDir');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mapDir']->value => $_smarty_tpl->tpl_vars['mapData']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['mapDir']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mapData']->value['Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['mapData']->value['Version'];?>
</option> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select><span id="helpBlock" class="help-block">##LS_HELP_BLOCK2##</span>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">##DS_LABEL5##</label>
				<div class="col-sm-7 form-inline">
					<input type="password" name="adminpass1" class="form-control" id="password" placeholder="##DS_PLACEHOLDE5##">&nbsp;<input type="password" name="adminpass2" class="form-control" id="password" placeholder="##DS_PLACEHOLDE6##"> <span id="helpBlock" class="help-block">##DS_HELP_BLOCK5##</span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-7 col-sm-3">
					<button type="submit" name="submit" value="gameSettings" class="pull-right btn btn-primary btn-block">##SAVE_CONFIG##</button>
				</div>
			</div>
		</form>
	</div>
	<?php }?> </main>
</body>
</html>
<?php }
}
