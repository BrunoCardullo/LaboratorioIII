<?php
class Estacionamiento
{
    public static function Guardar($unAuto)
    {
    //toma el vehiculo y lo guarda en un archivo
//var_dump($unAuto);
    $archivo = fopen("Archivos/estacionados.txt", "a");
    $renglon = $unAuto->patente."--".$unAuto->fechIngreso."\n";
    
    fwrite($archivo, $renglon);
    fclose($archivo);
    }

    public static function Sacar($unAuto)
    {
        $listaEstacionados = array();
        //abrir el archivo y hacer un fgetc al explode 
        $archivo = fopen("Archivos/estacionados.txt", "a");
        while(fgets($archivo))
        {
            fgets()
            $listaEstacionados() = explode("\n", $archivo)
        }
        //devolver el precio y sacar el auto del archivo.
        //verifica si esta y si lo encuentra se calcula el costo.
        //strtotime() me da la dif al restarlo.
        //Sacar del array
        //Guardar en estacionados.txt
        //Guardar en facturados.txt

    }
}