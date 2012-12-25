<?php

// NOTE: This page is just for testing purposes. It is not supposed to be here
// in an actual release

require_once( '../util/webpages.php' );

$page = new MainPage( "<iframe src='http://yfewh.tnsul.servertrust.com/' width=100% height=100% ></iframe>" );
$page->SetTitle( $title );
$page->SetActive( 'blah.php' );
echo( $page->FetchPage() );

?>