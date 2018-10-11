var catetoMenor=parseFloat(prompt("Introduce el cateto menor"));
var catetoMayor=parseFloat(prompt("Introduce el cateto mayor"));

var hipotenusa=Math.sqrt(Math.pow(catetoMayor,2)+Math.pow(catetoMenor,2));
alert("La hipotenusa del triangulo rectangulo es "+hipotenusa+" cm");