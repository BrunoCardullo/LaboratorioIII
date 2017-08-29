<?PHP
/**/
echo "Tomando la fecha del sistema, hoy es: " . date("d/m/y") . "<br>";
echo "En disintos formatos: " . "<br>";
echo date("y,m,d") . "<br>";
echo date("m-d-y") . "<br>";
$dia = date("d");
$mes = date("m");
if($dia > 21 && $mes == 12 || $mes == 01 || $mes == 02 || $mes == 3)
{
    echo "Verano <br>";
}else if($dia > 21 && $mes == 4 || $mes == 5 || $mes == 6)
{
    echo "Otoño <br>";
}else if($dia > 21 && $mes == 7 || $mes == 8 || $mes == 9)
{
    echo " Invierno <br>";
}else echo "Primavera <br>";
?>