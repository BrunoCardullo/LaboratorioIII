<?PHP

/*
1-guardar array en archivo
 + Transformar objeto a string + separador.
 + Guardar un objeto por renglon.
 2- Leer array en archivo.
  + Leer renglon por renglon.
  + Utilizar explode.
  + Crear obj
  + Agregar el obj al array.
*/
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
    public function EliminarEmpleado( $unEmpleado )
    {
     $contador = 0;   
        foreach ($this->_empleados as $key => $value) {
        $contador++;
           if( $unEmpleado->GetLegajo() == $value->GetLegajo() )
            {
                array_splice($this->_empleados , $contador - 1 , 1);
            }
            
        }
        
        /*
        for ($i=0; $i < sizeof($this->_empleados); $i++) 
        { 
            
            echo "<br>----------------------------------------------------------------<br>";
            //var_dump($this->_empleados[$i]->GetLegajo());
            $leg = $this->_empleados[$i]->GetLegajo();
            echo "LEgajo" . $leg;
            if( $unEmpleado->GetLegajo() == $leg )
            {
                array_splice($this->_empleados , $i , 1);
            }
        }
        */
    }
    public function EliminarEmpleadosRepetidos()
    {
        $this->_empleados = array_unique($this->_empleados,SORT_REGULAR);
    }
    public function ToString()
    {
        echo "Razon social: " . $this->_razonSocial . ". <br>";
        foreach ($this->_empleados as $key => $value) {
            $empleado = $value->ToString() . "<br>";
            echo $empleado;
        }
    }
    public function GuardarFabrica()
    {
        $fabrica = fopen("fabrica.txt","w");
        foreach ($this->_empleados as $key => $value) {
            fwrite($fabrica, $value->ToString()."\n");
        }
        fclose($fabrica);
    }
   public function LeerFabrica()
    {
        $archivo = fopen("fabrica.txt","r");
        $personas = array();
        while(!feof($archivo)){
        $cadenaLeida = fread($archivo,filesize($archivo));
        echo($archivo);
        $cadenaSeparada = explode(",",$cadenaLeida);
        array_push($personas,$cadenaSeparada);
        echo $cadenaSeparada[0];
        }
        
        fclose($fabrica);
    }


    
    
}

?>