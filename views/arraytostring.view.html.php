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
</body>
</html>