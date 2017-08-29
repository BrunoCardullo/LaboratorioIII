<?PHP
//REQUES es una variable global de php, que toma todos los datos. 
//Se ingresara el nombre de la persona y el nombre del archivo, guardando el dato en el archivo
//Al presionar el boton guardar, se verificara si el archivo existe.
//de ya existir el archivo, se copiara y se movera a la carpeta bk, cambiandole el nombre por el nombre + la fecha.$_COOKIE
//Al presionar el boton leer, si el archivo existe, se mostrara el contenido, de no existir el archivo, se informara que no existe.
var_dump($_REQUEST);
var_dump($_POST);
$nombre = $_POST['nombre'];
$fichero = fopen("guardo.txt","w");
fwrite($fichero, $nombre);
fclose($fichero);



?>