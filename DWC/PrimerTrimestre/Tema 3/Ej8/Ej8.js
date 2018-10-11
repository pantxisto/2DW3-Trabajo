var direccionCorreo = prompt("Introduce la dirección de correo electrónico");
var nombreServidor = direccionCorreo.slice(direccionCorreo.indexOf("@")+1,direccionCorreo.length);
console.log("El nombre del servidor es: "+nombreServidor);