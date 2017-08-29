<?PHP
$destino = "uploads/".$_FILES["archivo"]["name"];
$origen = "nuevoUploads/".$_FILES["archivo"]["name"];
$nombreArchivo = $_FILES["archivo"]["name"];
echo $origen;

if(file_exists($destino))
{
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino);
    copy($destino,$origen);
}



?>