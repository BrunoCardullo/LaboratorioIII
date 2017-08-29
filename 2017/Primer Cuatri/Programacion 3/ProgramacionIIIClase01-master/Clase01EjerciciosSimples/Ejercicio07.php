<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio07.php" method="post" name = "array">
    <h3>Ingrese numeros..</h3>
    <input type="text" name = "numeroIngresado"> <br>
    <input type="submit" name = "btnEnviar" value = "Agregar al array">

    <?PHP
    $contador = 0;
    $numero = 0;
    $nuevoArray = array();
    if(isset($_POST['btnEnviar']))
    {
        $numero = $_POST['numeroIngresado'];
        if($numero % 2 != 0)
        {
            $contador = $contador + 1;
            array_push($nuevoArray,$numero);
            
            echo "<br>Se agregó un numero al array..<br>";
            if($contador == 4)
        {
            for ($i=0; $i < 4; $i++) 
            { 
                echo "Numero " . $i . " del array: " . $nuevoArray[i];
            }
        }
        }
        
    }
    
    ?>
    </form>
</body>
</html>