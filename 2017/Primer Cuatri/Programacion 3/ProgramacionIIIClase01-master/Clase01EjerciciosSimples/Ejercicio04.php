<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio04.php" method = "post" name="operador">
    Ingrese el operador:
    <input type="text" name = "operador"> <br>
    <input type="submit" name="btnEnviar" value = "Calcular">
<?PHP
$op1 = rand(1,15);
$op2 = rand(1,15);
echo "<br>";
    if(isset($_POST['btnEnviar']))
    {
        $operador = $_POST['operador'];
        if($operador == '*')
        {
            echo "El resultado de : " . $op1 . "*" . $op2 . "=" . $op1 * $op2;
        }else if($operador == '+')
        {
            echo "El resultado de : " . $op1 . "+" . $op2 . "=" . $op1 + $op2;
        }else if($operador == '-')
        {
            echo "El resultado de : " . $op1 . "-" . $op2 . "=" . $op1 - $op2;
        }else if($operador == '/')
        {
            echo "El resultado de : " . $op1 . "/" . $op2 . "=" . $op1 / $op2;
        }
        
    }
?>
</form>
</body>
</html>
