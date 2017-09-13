<?php

move_uploaded_file($_FILES["fotoUno"]["tmp_name"], "fotoUno.png");
$im = imagecreatefrompng("fotoUno.png");
$estampa = imagecreatefrompng("fotoDos.png");


// Establecer los márgenes para la estampa y obtener el alto/ancho de la 
//imagen de la estampa
$margen_dcho = 10;
$margen_inf = 10;
$sx = imagesx($estampa);
$sy = imagesy($estampa);

// Copiar la imagen de la estampa sobre nuestra foto usando los índices de
// márgen y el
// ancho de la foto para calcular la posición de la estampa. 
imagecopy($im, $estampa, imagesx($im) - $sx - $margen_dcho, 
imagesy($im) - $sy - $margen_inf, 0, 0, imagesx($estampa), 
imagesy($estampa));
var_dump($_FILES);
// Imprimir y liberar memoria
/*header('Content-type: image/png');
imagepng($im);
imagedestroy($im);*/

//INDICO CUAL SERA EL DESTINO DEL ARCHIVO SUBIDO
$destino = "MarcaDeAgua/" . $_FILES["fotoUno"]["name"];

$uploadOk = TRUE;

//PATHINFO RETORNA UN ARRAY CON INFORMACION DEL PATH
//RETORNA : NOMBRE DEL DIRECTORIO; NOMBRE DEL ARCHIVO; EXTENSION DEL ARCHIVO

//PATHINFO_DIRNAME - retorna solo nombre del directorio
//PATHINFO_BASENAME - retorna solo el nombre del archivo (con la extension)
//PATHINFO_EXTENSION - retorna solo extension
//PATHINFO_FILENAME - retorna solo el nombre del archivo (sin la extension)

//echo var_dump( pathinfo($destino));die();

$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);


//VERIFICO QUE EL ARCHIVO NO EXISTA
if (file_exists($destino)) {
    echo "El archivo ya existe. Verifique!!!";
    $uploadOk = FALSE;
}
//VERIFICO EL TAMA�O MAXIMO QUE PERMITO SUBIR
/*if ($_FILES["fotoUno"]["size"] > 500000) {
    echo "El archivo es demasiado grande. Verifique!!!";
    $uploadOk = FALSE;
}*/
//VERIFICO SI ES UNA IMAGEN O NO
//var_dump(getimagesize($_FILES["archivo"]["tmp_name"]));die();

//OBTIENE EL TAMA�O DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
//IMAGEN, RETORNA FALSE
$esImagen = getimagesize($_FILES["fotoUno"]["tmp_name"]);

if($esImagen === FALSE) {//NO ES UNA IMAGEN

	//SOLO PERMITO CIERTAS EXTENSIONES
	if($tipoArchivo != "doc" && $tipoArchivo != "txt" && $tipoArchivo != "rar") {
		echo "Solo son permitidos archivos con extension DOC, TXT o RAR.";
		$uploadOk = FALSE;
	}
}
else {// ES UNA IMAGEN

	//SOLO PERMITO CIERTAS EXTENSIONES
	if($tipoArchivo != "png") {
		echo "Solo son permitidas imagenes con extension PNG	.";
		$uploadOk = FALSE;
	}

}

//VERIFICO SI HUBO ALGUN ERROR, CHEQUEANDO $uploadOk
if ($uploadOk === FALSE) {

    echo "<br/>NO SE PUDO SUBIR EL ARCHIVO.";

} else {
	//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    if (move_uploaded_file($_FILES["fotoUno"]["tmp_name"], $destino)) {
        echo "<br/>El archivo ". basename( $_FILES["fotoUno"]["name"]). " ha sido subido exitosamente.";
    } else {
        echo "<br/>Lamentablemente ocurri&oacute; un error y no se pudo subir el archivo.";
    }
}

?>