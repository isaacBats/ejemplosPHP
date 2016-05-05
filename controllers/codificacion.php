<?php 

	if( isset($_POST) ){

		 $contra = contra( $_POST );
	}


	function contra( $usuario ){

		return $usuario['pass'];
	}


require '../views/codconjs.view.html.php';