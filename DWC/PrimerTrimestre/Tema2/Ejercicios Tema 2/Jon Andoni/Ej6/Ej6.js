var numero=5;
contador=1;
var numeroIntroducido=0;

while (contador<=5){
    numeroIntroducido=parseInt(prompt("Introduce un numero del 1 al 10"));
    if(numeroIntroducido>numero){
        alert("El número es menor");
    }else if(numeroIntroducido<numero){
        alert("El número es mayor");
    }else if(numeroIntroducido==numero){
        alert("Has acertado");
        break;
    }
    contador=contador+1;
}

if(contador>5){
    alert("Has gastado todas las oportunidades")
}
