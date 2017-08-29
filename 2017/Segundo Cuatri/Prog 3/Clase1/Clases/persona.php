<?php

class Persona
{
    $nombre;
    $apellido;
    $dni;
    function __construct($nombre, $apellido="", $dni = -1) // = indica opcionalidad.
    {
        $this->nombre = $nombre;
    }
    function Saludar()
    {
        echo "Hola";
    }

    static function SaludarDos()
    {
        echo "Hola 2";
    }

}