var contador=1;
var multiplo=0;
var sumaMultiplo=0;

while (multiplo<3000){
    multiplo=contador*11;
    if(multiplo<3000){
        console.log(multiplo);
        sumaMultiplo=sumaMultiplo+multiplo;
        contador=contador+1;
    }    
}
console.log("La suma total es: "+sumaMultiplo);