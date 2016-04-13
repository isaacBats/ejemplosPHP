<?php 

function descargar( $file ){

	if(file_exists($file)){

		$fileName = array_pop(explode('/', $file));
		// echo $file;
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		// header('Content-Disposition: attachment; filename="'.$file.'"');
		header('Content-Disposition: attachment; filename="'.$fileName.'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
 
        ob_clean();
        flush();
        readfile($file);
        exit;		
	}else{
		echo 'No existe '.$file;
	}

}


require 'views/vistaDescarga.php';