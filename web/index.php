<?php

require_once( '../smarty/setup_smarty.php' );
require_once( '../util/webpages.php' );

$title = 'Test';
$smarty = CreateSmartyObject();
$smarty->assign( 'test', rand(0, 100) );
$innerView = $smarty->fetch( 'index.tpl' );

$page = new MainPage( $innerView );
$page->SetTitle( $title );
$page->SetActive( 'index.php' );
echo( $page->FetchPage() );

?>