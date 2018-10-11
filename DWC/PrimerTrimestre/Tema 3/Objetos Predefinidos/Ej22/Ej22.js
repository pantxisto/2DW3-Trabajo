var fechaActual=new Date("1990-06-15");
var mesActual=fechaActual.getMonth();
var diaActual=fechaActual.getDate();
var horaActual=fechaActual.getHours();
var minutoActual=fechaActual.getMinutes();
var segundoActual=fechaActual.getSeconds();

var fechaInicio=new Date(fechaActual.getFullYear()+"-01-01");
var mesInicio=fechaInicio.getMonth();
var diaInicio=fechaInicio.getDate();
var horaInicio=fechaInicio.getHours();
var minutoInicio=fechaInicio.getMinutes();
var segundoInicio=fechaInicio.getSeconds();

var restaDia=diaActual-diaInicio;
var restaHora=horaActual-horaInicio;
var restaMinuto=minutoActual-minutoInicio;
var restaSegundo=segundoActual-segundoInicio;

var diasPasados=0;

for(var i=mesInicio;i<mesActual;i++){
    if(i==0 || i==2 || i==4 || i==6 || i==7 || i==9 || i==11){
        diasPasados=diasPasados+31;
    }else if(i==3 || i==5 || i==8 || i==10){
        diasPasados=diasPasados+30;
    }else if(i==1){
        diasPasados=diasPasados+28;
    }
}

diasPasados=diasPasados+restaDia;
var tiempoPasado=fechaActual-fechaInicio;
var segundos=tiempoPasado/1000;
var minutos=segundos/60;
var horas=minutos/60;
var dias=horas/24;

console.log("Han pasado "+diasPasados+" dias, "+(restaHora+1)+" horas, "+restaMinuto+" nimutos, "+restaSegundo+" segundos");
console.log("Ha pasado "+dias+" dias, "+horas+" horas, "+minutos+" minutos, "+segundos+" segundos");