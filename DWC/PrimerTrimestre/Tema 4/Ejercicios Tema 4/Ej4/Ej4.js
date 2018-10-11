function productoAlimenticio(codigo, nombre, precio){
    this.codigo=codigo;
    this.nombre=nombre;
    this.precio=precio;
    this.imprimeDatos=function(){
        console.log("Código: "+this.codigo+", nombre: "+this.nombre+" y precio: "+this.precio);
    }
}

var p1=new productoAlimenticio("0001", "producto1", 16.56);
var p2=new productoAlimenticio("0002", "producto2", 24.78);
var p3=new productoAlimenticio("0003", "producto3", 12.43);

var arrayProAli=[];

arrayProAli.push(p1);
arrayProAli.push(p2);
arrayProAli.push(p3);

for(var i=0; i<arrayProAli.length; i++){
    arrayProAli[i].imprimeDatos();
}