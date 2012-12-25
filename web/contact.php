<?php

require_once( '../smarty/setup_smarty.php' );
require_once( '../util/webpages.php' );

$title = 'Contact Us';
$smarty = CreateSmartyObject();
$innerView = $smarty->fetch( 'contact.tpl' );

$page = new MainPage( $innerView );
$page->SetTitle( $title );
$page->SetActive( 'contact.php' );
echo( $page->FetchPage() );

?>
