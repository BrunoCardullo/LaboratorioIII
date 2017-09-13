<?php

//Guardar img con marca de agua y guardarla con el nombre que se ingresa por param.

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
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);



?>