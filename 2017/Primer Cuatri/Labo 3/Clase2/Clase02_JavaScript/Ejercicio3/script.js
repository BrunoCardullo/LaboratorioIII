window.onload= function()
{
    var parrafos = document.getElementsByTagName("p");

    parrafos[0].innerHTML= "Primer parrafo";
    parrafos[1].innerHTML= "Segundo parrafo";
    parrafos[2].innerHTML= "Tercer parrafo";

    for(var i=0; i<parrafos.length; i++)
    {
        parrafos[i].innerHTML = "parrafos" + (i+1);       
    }

    var txt=document.getElementById("texto");
    var txt2= document.getElementById("textoAbajo");
    var contador = 0;

    txt.onblur = function()
    {
        contador++;
        txt2.value = contador;
    }

}