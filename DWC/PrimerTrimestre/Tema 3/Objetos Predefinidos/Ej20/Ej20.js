var fechaDespligue=new Date();
var segundosDespliegue=fechaDespligue.getSeconds();
var nombre=prompt("Introduce tu nombre");
var fechaIntroduccion=new Date();
var segundosIntroduccion=fechaIntroduccion.getSeconds();
var resta=segundosIntroduccion-segundosDespliegue;
console.log("Has tardado "+resta+" segundos en introducir tu nombre");
