<?PHP
include_once "Empleado.php";
$nombre = "";
$apellido = "";
$dni = "";
$sexo = "";
$legajo = 0;
$sueldo = 0;


    /*$nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $dni = $_POST['txtDni'];
    $sexo = $_POST['txtSexo'];
    $legajo = $_POST['txtLegajo'];
    $sueldo = $_POST['txtSueldo'];*/
    $nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : null;
    $dni = isset($_POST['txtDni']) ? $_POST['txtDni'] : null;
    $apellido = isset($_POST['txtApellido']) ? $_POST['txtApellido'] : null;
    $sexo = isset($_POST['txtSexo']) ? $_POST['txtSexo'] : null;
    $legajo = isset($_POST['txtLegajo']) ? $_POST['txtLegajo'] : null;
    $sueldo = isset($_POST['txtSueldo']) ? $_POST['txtSueldo'] : null;

    if($nombre != null && $dni != null && $apellido != null && $sexo != null && $legajo != null && $sueldo != null)
    {
    $nuevoEmpleado = new Empleado($nombre,$apellido,$dni,$sexo,$legajo,$sueldo);
    $archivo = fopen("empleados.txt","a");
    fwrite($archivo,$nuevoEmpleado->ToString() . "\r\n");
    fclose($archivo);
    echo "<a href='mostrar.php'>Ir</a>";
    }else
    {
        echo "<a href='index.html'>Ir</a>";
    }



?>