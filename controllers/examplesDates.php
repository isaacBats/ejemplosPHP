<?php 


$fechaUnix = time();

$fechaFormato = date("j-m-Y H:i:s", $fechaUnix);
$fechaInicio = 1476985703;
$fechaFin = 1476986186;
$fechaInicioFormato = date('j-m-Y H:i:s', $fechaInicio);
$fechaFinFormato = date('j-m-Y H:i:s', $fechaFin);




require '../views/examplesDateTime.view.html.php';