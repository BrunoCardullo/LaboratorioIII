<?PHP
include_once "Persona.php";
class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;

    function __construct($nombre,$apellido,$dni,$sexo, $legajo, $sueldo)
    {
        parent::__construct($nombre,$apellido,$dni,$sexo);
        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;

    }

    public function GetLegajo()
    {
        return $this->_legajo;
    }
    public function GetSueldo()
    {
        return $this->_sueldo;
    }
    public function Hablar ($idioma)
    {
        return "El empleado habla: " . $idioma . ". <br>";
    }
    public function ToString()
    {
        return parent::ToString() . "Legajo: " . $this->_legajo . ". - Sueldo: " . $this->_sueldo . ". <br>";
    }

}
?>