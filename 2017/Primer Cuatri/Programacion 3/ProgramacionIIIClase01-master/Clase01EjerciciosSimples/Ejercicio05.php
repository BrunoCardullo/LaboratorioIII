<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio05</title>
</head>
<body>
    <form action="Ejercicio05.php" method="post" name = "numero">
    Ingrese un numero entre el 20 y el 60..<br>
    <input type="text" name="numeroIngresado">
    <input type="submit" name="btnEnviar" value = "Calcular">
    <br>

<?PHP
$num = 0;

if(isset($_POST['btnEnviar']))
{
    $num = $_POST['numeroIngresado'];
}
if($num[0] == 2)
{
    echo "Veinti";
}
if($num[0] == 3)
{
    echo "Treinta y ";
}
if($num[0] == 4)
{
    echo "Treinta y ";
}
if($num[0] == 5)
{
    echo "Cincuenta y ";
}
if($num[0] == 6)
{
    echo "Sesenta y ";
}
if($num[1] == 1)
{
    echo " uno.";
}
if($num[1] == 2)
{
    echo " dos.";
}
if($num[1] == 3)
{
    echo " tres.";
}
if($num[1] == 4)
{
    echo " cuatro.";
}
if($num[1] == 5)
{
    echo " cinco.";
}
if($num[1] == 6)
{
    echo " seis.";
}
if($num[1] == 7)
{
    echo " siete.";
}
if($num[1] == 8)
{
    echo " ocho.";
}
if($num[1] == 9)
{
    echo " nueve.";
}
?>

    </form>
</body>
</html>