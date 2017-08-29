<?PHP
include_once "Empleado.php";
include_once "Persona.php";
class Fabrica
{
    private $_empleados;
    private $_razonSocial;

    function __construct($razonSocial)
    {
        $this->_razonSocial = $razonSocial;
        $this->_empleados = array();
    }
    public function AgregarEmpleado ($empleado)
    {
        array_push($this->_empleados,$empleado);
        $this->EliminarEmpleadosRepetidos();
    }
    public function CalcularSueldos()
    {
        $acumuladorSueldos = 0;
        foreach ($this->_empleados as $key) 
        {
            $acumuladorSueldos += $key->GetSueldo();
        }
        return $acumuladorSueldos;
    }
    public function EliminarEmpleado($unEmpleado)
    {
        for ($i=0; $i < sizeof($this->_empleados); $i++) 
        { 
            if($unEmpleado->GetLegajo() == $this->_empleados[$i].GetLegajo())
            {
                array_splice($this->_empleados , $i , 1);
            }
        }
    }
    public function EliminarEmpleadosRepetidos()
    {
        $this->_empleados = array_unique($this->_empleados,SORT_REGULAR);
    }
    public function ToString()
    {
        echo "Razon social: " . $this->_razonSocial . ". <br>";
        foreach ($this->_empleados as $key) 
        {
           $key->ToString();
           
        }
    }
    
}

?>