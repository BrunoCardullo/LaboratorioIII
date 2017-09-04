<?php

abstract class Persona
{
    private $nombre;
    private $apellido;
    private $sexo;

    public function __construct($nombre, $apellido, $sexo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo; 
    }

    abstract function MostrarDatos();
}