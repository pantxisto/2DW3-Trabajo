var numero=parseInt(prompt("Introduce un numero"));

parImpar(numero);

function parImpar(num){
    if(num%2==0){
        console.log("El numero es par");
    }else{
        console.log("El numero es impar");
    }
}