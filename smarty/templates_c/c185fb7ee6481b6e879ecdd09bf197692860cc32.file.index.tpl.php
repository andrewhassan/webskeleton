<?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 01:15:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37388867250d5419d21e933-32980828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c185fb7ee6481b6e879ecdd09bf197692860cc32' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates/index.tpl',
      1 => 1356398143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37388867250d5419d21e933-32980828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d5419d26df25_56746306',
  'variables' => 
  array (
    'test' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d5419d26df25_56746306')) {function content_50d5419d26df25_56746306($_smarty_tpl) {?><div class="hero-unit">
	<h1>Welcome!</h1>
	<p>This is the prototype for my simple PHP web skeleton.</p>
	<p>Here is a random number: <?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</p>
	<a class="btn btn-primary" onclick="location.reload();">Reload Page</a>
	<a class="btn" href=<?php echo "http://www.google.ca";?>
>Go to Google</a>
	<a class="btn" onclick="alert('Hello');">Say hello</a>
</div><?php }} ?>