var nombres=[];

for(var i=0;i<5;i++){
    nombres.push(prompt("Introduce un nombre")); 
}

nombres.sort();

for(var i=0;i<nombres.length;i++){
    console.log(nombres[i]); 
}