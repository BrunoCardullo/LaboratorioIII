<?php
include_once "./Clases/Aula.php";
include_once "./Clases/Persona.php";
include_once "./Clases/Alumno.php";
include_once "./Clases/IMostrarPersonas.php";
include_once "./Clases/Profesor.php";

$alumnoUno = new Alumno("Pedro", "Alfonso", "Masculino", "102731");
$alumnoDos = new Alumno("Carlos", "Alberto", "Masculino", "145566");

aula1 = new Aula();
$aula1->AgregarAlumno($AlumnoUno);
$aula1->MostrarPersona($AlumnoUno);
$alumnoUno->MostrarDatos();