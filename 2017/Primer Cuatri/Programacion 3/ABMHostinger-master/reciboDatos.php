<?PHP

$nombre = isset($_POST['txtNombre']) ? $_POST['txtNombre'] : null;
$apellido = isset($_POST['txtApellido']) ? $_POST['txtApellido'] : null;
$dni = isset($_POST['txtDni']) ? $_POST['txtDni'] : null;
$nombreImagen = isset($_FILES['imagen']['name']) ? $_FILES['imagen']['name'] : null;
$destino = "images/".$_FILES["imagen"]["name"];

move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino);

echo $destino;



?>