function Saludar()
{
    //alert("Hola mundo")
    console.log("Hola mundo de nuevo");
    //document.write("Hola mundo por document<br>");
    //document.write("Hola");

    //var nombre;
    var num;
    var num2;
    
    //nombre = prompt("Ingrese nombre: ")
    num = parseInt(prompt("Ingrese numero 1: "));
    num2= parseInt(prompt("Ingrese numero 2: "));
    var suma = num + num2;
    //alert("Su nombre es ", nombre);
    alert("La suma es: " + suma);
    /*if(isNaN(num,num2)) //Validar si es numero
    {

    }*/  

    var nombre = document.getElementById(nombre).value;
    var txtNombre= document.getElementById("nombreId");
    var txtSaludo=document.getElementById("txtSaludoId");
    txtSaludo.value="Hola" + nombre;
    nombre = txtNombre.nodeValue;
    alert("Su nombre es: ", nombre);
}

function Sumar()
{
    var num1;
    var num2;
    var resultado;

    num1 = parseInt(document.getElementById("num1").value)
    num2 = parseInt(document.getElementById("num2").value)
    resultado.value = document.getElementById("resul");
    resultado.value = num1 + num2; 
}
