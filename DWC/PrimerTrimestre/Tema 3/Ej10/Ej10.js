var date=new Date();
var dia=date.getDate();
var mes=date.getMonth();
var año=date.getFullYear();
var hora=date.getHours();
var minutos=date.getMinutes();
var mesString="";

if(mes==0){
    mesString="Enero";
}else if(mes==1){
    mesString="Febrero";
}else if(mes==2){
    mesString="Marzo";
}else if(mes==3){
    mesString="Abril";
}else if(mes==4){
    mesString="Mayo";
}else if(mes==5){
    mesString="Junio";
}else if(mes==6){
    mesString="Julio";
}else if(mes==7){
    mesString="Agosto";
}else if(mes==8){
    mesString="Septiembre";
}else if(mes==9){
    mesString="Octubre";
}else if(mes==10){
    mesString="Noviembre";
}else if(mes==11){
    mesString="Diciembre";
}

console.log("Hoy es día "+dia+" de "+mesString+" de "+año+" y en estos momentos son las "+hora+":"+minutos);