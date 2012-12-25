<?php

function CreateSmartyObject() {
// put full path to Smarty.class.php
	require_once('/usr/local/lib/php/Smarty/Smarty.class.php');
	$smarty = new Smarty();

	$smarty->setTemplateDir('/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates');
	$smarty->setCompileDir('/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/templates_c');
	$smarty->setCacheDir('/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/cache');
	$smarty->setConfigDir('/Applications/XAMPP/xamppfiles/htdocs/TestWebsite/smarty/configs');

	return $smarty;
}
?>