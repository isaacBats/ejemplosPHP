<!DOCTYPE html>
<html>
<head>
	<title>Convierte un array asociativo a un string</title>
</head>
<body>
	<h1>Convierte un array asociativo a un string</h1>
	<hr>
	<pre>
		<?php print_r( $array ); ?>
	</pre>

	<p>Y este es el string de el array</p>
	<?php 
		echo array_to_string( $array );
	 ?>

	<h1>Día del programador</h1>
	<?php $fecha = date('d-m-Y'); if( $fecha == '12-09-2016' ){ echo 'Feliz día del programador'; }else{ var_dump($fecha); } ?>
</body>
</html>