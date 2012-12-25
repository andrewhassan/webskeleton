<?php

require_once( '../smarty/setup_smarty.php' );
require_once( 'locations.php' );

class Page {
	private $title;
	private $javascript;
	private $innerView;
	private $smarty;
	private $JAVASCRIPT_DIR = '../js/';
	private $active;
}

interface IPage {
	public function FetchPage();
	public function SetTitle( $title );
	public function SetJavascript( $javascript );
	public function SetView( $innerView );
}

class MainPage extends Page implements IPage {

	function __construct( $innerView, $title = '', $active = '', $javascript = null ) {
		$this->title = $title;
		$this->javascript = $javascript;
		$this->innerView = $innerView;
		$this->JAVASCRIPT_DIR = '../js/';
		$this->active = $active;

		$this->smarty = CreateSmartyObject();
	}

	public function FetchPage() {
		$formattedJs = '';

		if( !is_null( $this->javascript ) ) {
			$javascriptSrc = sprintf( 
				'%s%s', 
				$this->JAVASCRIPT_DIR, 
				$this->javascript );

			if( file_exists( $javascriptSrc ) ) {
				$formattedJs = sprintf( '<script type="text/javascript"
										src="%s"></script>',
										$javascriptSrc );
			}	
		}

		$navbarLinks = $this->GenerateNavbarLinks();
		
		$this->smarty->assign( 'title', $this->title );
		$this->smarty->assign( 'innerView', $this->innerView );
		$this->smarty->assign( 'js', $formattedJs );
		$this->smarty->assign( 'navbarLinks', $navbarLinks );
		return $this->smarty->fetch( 'main_frame.tpl' );

	}

	public function SetTitle( $title ){
		$this->title = $title;
	}

	public function SetActive( $active ){
		$this->active = $active;
	}

	public function SetJavascript( $javascript ){
		$this->javascript = $javascript;
	}

	public function SetView( $innerView ){
		$this->innerView = $innerView;
	}

	private function GenerateNavbarLinks() {
		$parsedFile = FetchLocations();
		$locations = $parsedFile['Locations'];

		$output = '';

		foreach ($locations as $key => $value){
			$liTag = 'li';
			if ( $this->active == $value ){
				$liTag = "li class='active'";
			}
			if ( !strstr( $value, "http://" ) ) {
				if( !file_exists( '../web/'.$value ) ) {
					throw new Exception( sprintf( "The page %s doesn't exist. Broken navbar links are not allowed", $value ) );
				}
				$output .= sprintf('<%s><a href="../web/%s">%s</a></li>', $liTag, $value, $key);
			}
			else {
				$output .= sprintf('<%s><a href="%s">%s</a></li>', $liTag, $value, $key);
			}
		}
		return $output;
	}
}

// TODO: Implement EmptyPage
//class EmptyPage extends Page implements IPage {
//}

?>