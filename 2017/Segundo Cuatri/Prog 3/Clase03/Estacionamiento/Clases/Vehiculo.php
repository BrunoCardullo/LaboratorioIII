<?php

class Vehiculo
{
    var $patente;
    var $fechIngreso;
    var $fechEgreso;
    var $importe;

    public function __construct($patente)
    {
        $this->patente = $patente;
    }

}