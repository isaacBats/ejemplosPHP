<?php 

$array = [
	'nombre' => 'Isaac Batista',
	'profecion' => 'Backend',
	'Lugar de trabajo' => 'Denumeris',
	'lenguajes' => [
						'php' => 'Symfony',
						'python' => 'Django',
						'javascript' => 'jQuery',
					],
	'color'	=> 'Negro',
];


function array_to_string ( $array )
{

    $attributes_str = NULL;
    foreach ( $array as $attribute => $value )
    {

        if(is_array($value)){
        	$attributes_str .= " $attribute=>".array_to_string($value)." ";
        }else{
        	$attributes_str .= " $attribute=>\"$value\" ";
        }

    }

    return $attributes_str;
}

require '../views/arraytostring.view.html.php';