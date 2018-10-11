var prefijoBizkaia=944;
var prefijoVitoria=945;
var prefijoGuipuzkoa=943;

var numeroTelefono=prompt("Introduce el número de teléfono");
var prefijo=parseInt(numeroTelefono.slice(0,3));

switch(prefijo){
    case prefijoBizkaia:
        console.log("Ese prefijo es de Bizkaia");
        break;
    case prefijoGuipuzkoa:
        console.log("Ese prefijo es de Guipuzkoa");
        break;
    case prefijoVitoria:
        console.log("Ese prefijo es de Vitoria");
        break;
    default:
        console.log("Ese prefijo aún no lo conozco");
        break;
}