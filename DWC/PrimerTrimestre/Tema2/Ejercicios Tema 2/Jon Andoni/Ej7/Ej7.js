contador=0;

do{
    var numero=parseInt(prompt("Introduce un numero, para parar introduce 9999"));
    if(numero!=9999){
        contador=contador+1;
    }
}while (numero!=9999);

alert("Has introducido "+contador+" numeros.")