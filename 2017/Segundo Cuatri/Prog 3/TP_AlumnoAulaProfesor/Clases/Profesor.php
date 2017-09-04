<?php

class Profesor extends Persona
{
    private $legajo;

    public function __construct($nombre, $apellido, $sexo, $legajo)
    {
        parent::__construct();
        $this->legajo = $legajo;
    }

    abstract function MostrarDatos()
    {
        $Profesor = new Profesor($nombre, $apellido, $sexo, $legajo);
        return $Profesor;
    }
}