<?PHP
include_once "FiguraGeometrica.php";
class Rectangulo extends FiguraGeometrica
{
    $ladoUno = 0;
    $ladoDos = 0;
    function __construct($l1,$l2)
    {
        $ladoUno = $l1;
        $ladoDos = $l2;
        
    }

    
}
?>