<?php 
if(isset($_POST)){

	
	$utf16 = mb_convert_encoding($_POST['pwd'], 'UTF-16LE');
	// $utf16 = iconv($in_charset = 'UTF-8' , $out_charset = 'UTF-16LE' , $_POST['pwd']);


	$pass = hash_hmac('sha1', $utf16 , $utf16 ,$raw_output=TRUE);
	
	$code = base64_encode($pass);

	
	// @$pass = hash_hmac('sha1', $_POST['pwd'], 'secret');
	
	// $pass1 = mb_convert_encoding($pass, 'UTF-16');

	// $code = base64_encode($pass1);

	echo '<h1>Tu password es: </h1>'.$code;
	echo '<br />tamaño: '.strlen($code);
	echo '<br />tamaño: '.strlen('W477AMlLwwJQeAGlPZKiEILr8TA=');

}


