<?php

include_once "./Clases/persona.php"; 
include_once "./Clases/policia.php";

Persona::SaludarDos();
$Persona = new Persona();
$Persona -> Saludar();
persona::Saludar();
$Persona -> saludarDos();

//Ejercicio1
/*$suma = 0;

for ($i=0; $suma+$i < 1000; $i++) 
{ 
    $suma+= $i;
    echo $suma."<br>";
}*/

//Ejercicio2
/*
$fecha = date("d-m");

echo $fecha."<br>";

if($fecha >= "21-12" && $fecha <"21-03")
{
    echo 'Verano';
}

elseif ($fecha >= "21-09" && $fecha <"21-12") 
{
    echo 'Primavera';
}

elseif ($fecha >="21-03" && $fecha < "21-06") 
{
    echo "Otoño";
}

elseif ($fecha >= "21-06" && $fecha < "21-09") {
    echo 'Invierno';
}
*/

