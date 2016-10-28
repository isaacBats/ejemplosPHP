<?php 

	$im = new Image();            
    
    //Cargar un archivo desde un input file de nombre cover
    if(isset($_FILES['cover'])){
	    $cover_tmp = $_FILES['cover']['tmp_name'];
	    $explode = explode('.', $_FILES['cover']['name']);
	    $name_cover = (string)$explode[0];

	    $path = __DIR__.'/../assets/images/sourcebook/covers/';
	    $im->CreateThumb($cover_tmp, $path, $name_cover, 560, 560);

	    // si no se quiere guardar pero si imprimir
        // $imagen = $im->CreateThumb($cover_tmp, null, null, 560, 560);    	
    }



    // Aun no he creado una vista