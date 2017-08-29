<?PHP
include_once "FiguraGeometrica.php";
class Triangulo extends FiguraGeometrica
{
    $altura = 0;
    $base = 0;

    function __construct($b,$h) 
    {
        parent::__construct();
        $altura = $h;
        $base = $b;
        CalcularDatos();
    }
    public function CalcularDatos()
    {
        $this->superficie = ($base * $altura) / 2;
        $this->perimetro = $base * 3;
    }

}

?>