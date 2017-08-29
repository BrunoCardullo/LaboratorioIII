<?PHP
include_once "Empleado.php";
include_once "Fabrica.php";


$fabricaUno = new Fabrica("FABRICA MANUEL");
$empleadoUno = new Empleado("Manuel", "Pardo", "38589577", "Masculino", 111111, 15000);
$empleadoDos = new Empleado("Fabiana","Prevosti","17570642","Femenino",222222,20000 );
$empleadoTres = new Empleado("Fabiana","Prevosti","17570642","Femenino",222222,20000 );
$empleadoCuatro = new Empleado("Pablo","Pardo","17570675","Manuel",333333,17000 );
$empleadoCinco = new Empleado("Paula","Pardo","45874122","Femenino",444444,23000 );

$fabricaUno->AgregarEmpleado($empleadoUno);
$fabricaUno->AgregarEmpleado($empleadoDos);
$fabricaUno->AgregarEmpleado($empleadoTres);
$fabricaUno->AgregarEmpleado($empleadoCuatro);
$fabricaUno->AgregarEmpleado($empleadoCinco);

$fabricaUno->ToString();



$sueldosCalculados = $fabricaUno->CalcularSueldos();
echo "CALCULO SUELDOS: $" . $sueldosCalculados . "<br>";
$fabricaUno->EliminarEmpleado($empleadoCinco);
echo "ELIMINO EMPLEADO CINCO..<br>";
$fabricaUno->ToString();





?>