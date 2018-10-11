var cumpleaños=new Date("1991-09-26");
var añoCumple=cumpleaños.getFullYear();
var mesCumple=cumpleaños.getMonth();
var diaCumple=cumpleaños.getDate();
var fechaActual=new Date();
var añoActual=fechaActual.getFullYear();
var mesActual=fechaActual.getMonth();
var diaActual=fechaActual.getDate();
var edad=0;
var fechaCambiante=new Date("1991-09-26");
var contadorDomingos=0;

if(mesActual<mesCumple || (mesActual==mesCumple && diaActual<diaCumple)){
    edad=añoActual-añoCumple-1;
    console.log();
}else{
    edad=añoActual-añoCumple;
}

for(var i=añoActual;i<=2100;i++){
    fechaCambiante.setFullYear(i);
    if(fechaCambiante.getDay()==0){
        contadorDomingos=contadorDomingos+1;
        console.log(fechaCambiante);
    }
}
console.log("Tu edad es "+edad+" años");
console.log("Vas a cumplir en domingo "+contadorDomingos+" veces desde hoy");
