<?PHP
class FiguraGeometrica
{
    function __construct() {
       
   }
    protected $color;
    protected $perimetro;
    protected $superficie;
    function GetColor()
    {
        return $color;
    }
    function SetColor($colorIngresado)
    {
        $color = $colorIngresado;
    }
    function ToString()
    {
        echo "Color: " . $color . "<br>" . $perimetro . "<br>" . $superficie; 
    }
    public abstract Dibujar()
    {}
    protected abstract CalcularDatos()
    {}

}

?>