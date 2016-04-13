<?php 

$file = '~/Documents/Daniel/2016/04/11/directoryProduct.txt';
$directory = '/Users/user/Documents/Daniel/apacheServer/Sites/alfonso_marina/html/assets/images/products';

$director = scandir('/Users/user/Documents/Daniel/apacheServer/Sites/alfonso_marina/html/assets/images/products');

//print_r($director);


// function listar_directorios_ruta($ruta){ 
//    if (is_dir($ruta)) { 
//       if ($dh = opendir($ruta)) { 
//          while (($file = readdir($dh)) !== false) { 
//             //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
//             //mostraría tanto archivos como directorios 
//             echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
//             if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
//                //solo si el archivo es un directorio, distinto que "." y ".." 
//                echo "<br>Directorio: $ruta$file"; 
//                listar_directorios_ruta($ruta . $file . "/"); 
//             } 
//          } 
//       closedir($dh); 
//       } 
//    }else 
//       echo "<br>No es ruta valida"; 
// }

function listar_directorios_ruta($ruta){ 
	// abrir un directorio y listarlo recursivo 
	if (is_dir($ruta)) { 
	if ($dh = opendir($ruta)) { 
	while (($file = readdir($dh)) !== false) { 
	//esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
	//mostraría tanto archivos como directorios 
	echo '<br/> > '.$file; 
	if (is_dir($ruta . "/" . $file) && $file!="." && $file!=".."){ 
	//solo si el archivo es un directorio, distinto que "." y ".." 
	echo '<br/>'.$ruta.'/'.$file; 
	listar_directorios_ruta($ruta ."/". $file . "/"); 
	} 
	} 
	closedir($dh); 
	} 
	}else 
	echo "<br>No es ruta valida"; 
}

//listar_directorios_ruta($directory);


require 'home.php';