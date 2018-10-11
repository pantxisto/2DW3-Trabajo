var cadena=prompt("Introduce una cadena");
var nuevaVentana=window.open("","Nueva Ventana","height=400, width=400,top=250,left=250");
nuevaVentana.document.write("<html><head><title>Nueva Ventana</title></head>");
nuevaVentana.document.write("<body><h1>La cadena es: "+cadena+"</h1></body></html>");