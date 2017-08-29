<?PHP

/*require "funciones.php";
require "noExiste.php";
require "funciones.php";*/
//include = permite repetir varias veces el mismo codigo.
 

include_once "funciones.php";
include_once "calculadora.php";
//include_once = no me permite repetir.
$resultado = sumar(5,9);
echo "<br>";
echo $resultado;
$resultadoDos = calculadora::Sumar(8,4); //nombreDeLaClase::NombreDelMetodo;
echo "<br>" . $resultadoDos;


?>