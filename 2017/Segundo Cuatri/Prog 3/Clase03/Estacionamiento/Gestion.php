<?php

include_once "./Clases/Vehiculo.php";
include_once "./Clases/Estacionamiento.php";

//$patente = "eee222";
//$accion = "Guardar";
$patente = $_POST['patente'];
$accion = $_POST['accion'];

//var_dump($_GET);
//var_dump($patente);
//var_dump($accion);
//var_dump($_FILES);

$vehiculo = new Vehiculo($patente);

var_dump($vehiculo);
$vehiculo->fechIngreso = date("Y-m-d H:i:s");
Estacionamiento::Guardar($vehiculo);
//pasar foto del auto cuando hace Guardar()
Estacionamiento::Sacar($vehiculo);

/*
-Si la accion es guardar pasar el vehiculo al metodo guardar de estacionamiento, 
de ser Sacar se llamara al metodo Sacar de estacionamiento pasandole 
el vehiculo como parametro.
*/

