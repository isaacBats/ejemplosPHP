<?php 
if(isset($_POST)){

	@$pass = hash_hmac('sha1', $_POST['pwd'], 'secret');
	
	$pass1 = mb_convert_encoding($pass, 'UTF-16');

	$code = base64_encode($pass1);

	echo '<h1>Tu password es: </h1>'.$code;
	echo '<br />tamaño: '.strlen($code);
	echo '<br />tamaño: '.strlen('sfr7wDK8FUrUWlJrfM51szyBaa8=');
	echo '<br />Decode '.base64_decode('sfr7wDK8FUrUWlJrfM51szyBaa8=');

}