<?php

class Alumno extends Persona
{
    private $nroLibreta;

    public function __construct($nombre, $apellido, $sexo, $nroLibreta)
    {
        parent::__construct();
        $this->nroLibreta = $nroLibreta;
    }

    abstract function MostrarDatos()
    {
        $Alumno = new Alumno($nombre, $apellido, $sexo, $nroLibreta);
        return $Alumno;
    }
}