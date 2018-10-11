var precio=parseFloat(prompt("Introduce el precio del producto"));
var iva=parseFloat(prompt("Introduce el iva a aplicar al producto"));

var precioFinal=calcularPrecio();
console.log(precioFinal);


function calcularPrecio(){
   var precioFuncion=precio+(precio*(iva/100));
   return precioFuncion;
}