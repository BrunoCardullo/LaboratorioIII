<?php

class Aula implements IMostrarPersonas
{
    private $arrayAlumnos = array();
    private $arrayProfesores = array();
    private $arrayPersonas = array();

    public function MostrarPersonas()
    {
        foreach ($arrayPersonas as $persona => $valor) 
        {
            echo "$persona : $valor";
        }
    } 

    public function AgregarAlumno($Alumno)
    {
        for ($i=0; $i <= $arrayAlumnos->count ; $i++) 
        {
            $arrayAlumnos
        } 
    }

    public function AgregarProfesor(){}
}