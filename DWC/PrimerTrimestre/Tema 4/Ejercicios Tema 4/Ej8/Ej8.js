var nombres=[];
var edades=[];

for(var i=0;i<6;i++){
    nombres.push(prompt("Introduce el nombre "+i));
    edades.push(parseInt(prompt("Introduce la edad "+i)));
}

function mostrar(){
    for(var i=0;i<6;i++){
        console.log("nombre: "+nombres[i]+", edad: "+edades[i]);
    }
}

function media(){
    media=0;
    suma=0;
    for(var i=0;i<6;i++){
        suma=suma+edades[i];
    }
    media=suma/6;
    console.log("La media de edades es: "+media);
}

function nombre(){
    nombre=prompt("Introduce el nombre");
    if(nombres.indexOf(nombre)!=-1){
        console.log("La edad de "+nombre+" es "+edades[nombres.indexOf(nombre)]);
    }else{
        console.log("El nombre no existe");
    }
}