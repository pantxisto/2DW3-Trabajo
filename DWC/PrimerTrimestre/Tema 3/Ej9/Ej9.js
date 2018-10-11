var salir=false;
var opcion=1;

while(opcion>0 && opcion<8){

    opcion=parseInt(prompt("Introduce una opcion:  1. Redondeo a su inmediato superior de un número 2. Redondeo a su inmediato inferior de un número 3. Redondeo al número más cercano 4. Cálculo del número máximo entre dos dados 5. Cálculo del número mínimo entre dos dados 6. Cálculo de un número elevado a otro 7. Cálculo de la raiz cuadrada de un número"));

    switch(opcion){
        case 1:
            var numero=parseInt(prompt("Introduce un numero real"));
            console.log("El numero redondeado hacua arriba es"+Math.ceil(numero));            
            break;
        case 2:
            var numero=parseInt(prompt("Introduce unnumero real"));
            console.log("El numero redondeado hacua abajo es"+Math.floor(numero));   
            break;
        case 3:
            var numero=parseInt(prompt("Introduce unnumero real"));
            console.log("El numero redondeado es"+Math.round(numero));   
            break;
        case 4:
            var numero1=parseInt(prompt("Introduce el numero 1"));
            var numero2=parseInt(prompt("Introduce el numero 2"));
            console.log(Math.max(numero1,numero2)+" es el mayor numero de los dos");
            break;
        case 5:
            var numero1=parseInt(prompt("Introduce el numero 1"));
            var numero2=parseInt(prompt("Introduce el numero 2"));
            console.log(Math.min(numero1,numero2)+" es el menor numero de los dos");
            break;
        case 6:
            var numero1=parseInt(prompt("Introduce el numero 1"));
            var numero2=parseInt(prompt("Introduce el numero 2"));
            console.log(Math.pow(numero1,numero2)+" es la potencia de los dos");
            break;
        case 7:
            var numero=parseInt(prompt("Introduce el numero"));
            console.log(Math.sqrt(numero)+" es la raiz cuadrada");
            break;
        default:
            break; 
    }

}
