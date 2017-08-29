<?PHP
/*
Ejercicio 6
Constructor de la clase array.
[0] = asignamos un numero random.
push (agrega un elemento). 
Todo tipo de dato que se transfiere de un lado al otro es un array.
var_dump(array); para mostrar el contenido del array
ver lo que es un var_dump
*/
$nuevoArray = array(rand(10,100),rand(1,100));
$suma = 0;
$promedio = 0;
for($i = 0;$i<3;$i++)
{
    array_push($nuevoArray, rand(1,100));
}
var_dump($nuevoArray);
$promedio = $suma / 5;
if($promedio<6)
{
    echo("<BR>El promedio es menor a 6...<BR>");
}else if($promedio == 6)
{
    echo("<BR>El promedio es igual a 6...<BR>");
}else
{
    echo("<BR>El promedio es mayor a 6...<BR>");
}
echo "ARRAY CARGADO DIRECTAMENTE DESDE EL CONSTRUCTOR";
?>