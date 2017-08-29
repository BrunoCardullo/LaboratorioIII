<?PHP
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);

echo "Los valores aleatorios son: " . $a . ", " . $b . " y " . $c . ". <br>";

if($a < $b && $b < $c)
{
    echo "El valor de medio es: " . $b . "... <br>";
}else if($b < $a && $a < $c)
{
    echo "El valor de medio es: " . $a . "... <br>";
}else if($a < $c && $c < $b)
{
    echo "El valor de medio es: " . $c . "... <br>";
}else 
{
    echo "No existe valor medio...";
}
?>