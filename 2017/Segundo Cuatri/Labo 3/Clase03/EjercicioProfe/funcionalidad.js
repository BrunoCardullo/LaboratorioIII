function Validar()
{
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;

    if (nombre== "" || apellido =="") 
    {
        document.getElementById("nombre").className = "error";
        document.getElementById("apellido").className = "error";
        alert("Falta completar campos!!!"); 
        return;
    }

    if(confirm("Esta seguro que desea agregar una persona?")==true)
    {
        document.getElementById("nombre").className="sinError";
        document.getElementById("apellido").className="sinError";
        var tCuerpo = document.getElementById("tCuerpo");
        tCuerpo.innerHTML = tCuerpo.innerHTML +
        "<tr><td>" + nombre + "</td>"+
        "<td>" + apellido + "</td>"+
        "<td><a href=''>borrar</a></td></tr>";
    }
}