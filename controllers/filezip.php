<?php 

	if( isset( $_GET['archivo'] ) ){

		descarga( $_GET['archivo'] );
	}



	function descarga( $archivo, $overwrite = false ){

		$path = __DIR__ . '/../public/data/' . $archivo;
		$zip = new ZipArchive();

		if ( $zip->open( $path, ZipArchive::CREATE ) !== TRUE ) {
			return false;
		}

		if($zip->open($path,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		
		$zip->addFromString('testfilephp.txt'.time(), '#1 This is a test string added as testfilephp.txt.\n');
		$zip->addFromString('testfilephp2.txt'.time(), '#2 This is a test string added as testfilephp2.txt.\n');
		$zip->addFile( '/Users/user/Documents/Daniel/descargas/image/logo_title.png', 'logo.png' );
		$zip->close();
		print_r($zip);
		exit();

                
	}

	function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$zip->addFile($file,$file);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}


require '../views/zip.view.html.php';