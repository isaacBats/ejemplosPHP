<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descarga de Archivos</title>
</head>
<body>
	<h1>Descarga una imagen</h1>
	<img src="assets/images/mueble.jpg" width="180" height="100">
	<a href="<?php $archivo = 'assets/images/listaArchivosAM.txt'; descargar($archivo); ?>">Descargar Imagen</a>
</body>
</html>