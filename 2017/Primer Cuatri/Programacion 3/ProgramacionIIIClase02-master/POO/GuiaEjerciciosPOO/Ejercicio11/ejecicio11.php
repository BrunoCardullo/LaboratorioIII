<?PHP
function PotenciaDeNumeros()
{
    $contador = 0;
    $numDevuelto = 0;

    for($i = 1; $i<4; $i++)
    {
        for($j = 1; $j<=5;$j++)
        {
            $numDevuelto = pow($i,$j);
            echo $numDevuelto . "<br>";
        }
    }

}
PotenciaDeNumeros();

?>