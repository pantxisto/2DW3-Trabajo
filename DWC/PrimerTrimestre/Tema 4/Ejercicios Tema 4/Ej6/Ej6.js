var arraySocios=[];
for(var i=0;i<10;i++){
    arraySocios.push(prompt("Introduce el nombre del socio "+i));
}


arrayOrden=[];
arrayReverse=[];

for(var i=0;i<10;i++){
    arrayOrden.push(arraySocios[i]);
}

for(var i=0;i<10;i++){
    arrayReverse.push(arraySocios[i]);
}


console.log("Normal");
for(var j=0;j<arraySocios.length;j++){
    console.log(arraySocios[j]);
}

console.log("Número de socios");
console.log("Hay "+arraySocios.length+" socios.");

arrayOrden.sort();
console.log("Orden alfabético");
for(var j=0;j<arrayOrden.length;j++){
    console.log(arrayOrden[j]);
}

arrayReverse.reverse();
console.log("Orden alfabético");
for(var j=0;j<arrayReverse.length;j++){
    console.log(arrayReverse[j]);
}


