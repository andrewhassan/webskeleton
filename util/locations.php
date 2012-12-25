<?php
	function FetchLocations() {
		$locationsFile = "../web/locations.json";
		if (!file_exists($locationsFile)){
			throw new Exception( "Locations file (locations.json) was not found." );
		}

		$fh = fopen( $locationsFile, 'r' );
		$fcontents = fread( $fh, filesize( $locationsFile ) );
		fclose( $fh );

		$parsedFile = json_decode( $fcontents, 1 );
		return $parsedFile;
	}
?>