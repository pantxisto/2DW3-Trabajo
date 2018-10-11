var fechaIntroducida=prompt("Introduce una fecha con el siguiente formato dd-mm-yyyy");

// Ejercicio a parte

var posDia= fechaIntroducida.indexOf("-");
var posAño= fechaIntroducida.lastIndexOf("-");
var dia=fechaIntroducida.substring(0,posDia);
var mes=fechaIntroducida.substring(posDia+1,posDia+3);
var año=fechaIntroducida.substring(posAño+1,posAño+5);
console.log(dia);
console.log(mes);
console.log(año);

//Con el document.wrtie puedo crear en el html codigo

this.validarFormatoFecha(fechaIntroducida);
var numeroAños=parseInt(prompt("Introduce el número de años a calcular"));
var fecha=new Date(fechaIntroducida);

var fechaModificada=new Date(fechaIntroducida);
var añoEmpiece=fecha.getFullYear()-numeroAños;

console.log(añoEmpiece);

for(var i=añoEmpiece;i<fecha.getFullYear();i++){
    fechaModificada.setFullYear(i);
    console.log("En el año "+i+" corresponde con el día "+fechaModificada.getDay());
}



function validarFormatoFecha(campo) {
    var RegExPattern = /^\d{1,2}\-\d{1,2}\-\d{2,4}$/;
    if ((campo.match(RegExPattern)) && (campo!='')) {
        console.log(true);
        return true;
    } else {
        console.log("La fecha no es correcta");
        return false;
    }
}
//Tambien puedo hacer que compruebe si los meses y días están bien