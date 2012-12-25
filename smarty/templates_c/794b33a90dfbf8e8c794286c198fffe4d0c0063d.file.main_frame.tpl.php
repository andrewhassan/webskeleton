<?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 13:18:53
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates/main_frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197738600450d5dc43bfc8c4-43024160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794b33a90dfbf8e8c794286c198fffe4d0c0063d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates/main_frame.tpl',
      1 => 1356441531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197738600450d5dc43bfc8c4-43024160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d5dc43c9c5a0_52615020',
  'variables' => 
  array (
    'title' => 0,
    'navbarLinks' => 0,
    'innerView' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5dc43c9c5a0_52615020')) {function content_50d5dc43c9c5a0_52615020($_smarty_tpl) {?><html>
<head>
	<link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css' />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index.php">Company Name</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<?php echo $_smarty_tpl->tpl_vars['navbarLinks']->value;?>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="container-fluid">
				<?php echo $_smarty_tpl->tpl_vars['innerView']->value;?>

		<hr/>
	</div>
	<footer>Copyright &#9400; 2012 Company Name</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<?php echo $_smarty_tpl->tpl_vars['js']->value;?>

</body>
</html><?php }} ?>