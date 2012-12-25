<?php

// NOTE: This page is just for testing purposes. It is not supposed to be here
// in an actual release

require_once( '../util/webpages.php' );

$title = "LOLWUT...";
$page = new MainPage( "<img src='http://www.lolwut.com/layout/lolwut.jpg'></img>" );
$page->SetTitle( $title );
$page->SetActive( 'blah.php' );
echo( $page->FetchPage() );

?>