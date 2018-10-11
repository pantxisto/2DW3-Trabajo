var nombreNavgeador = navigator.appName;
console.log("El nombre del navegador es "+nombreNavgeador);
var versionNavegador = navigator.appVersion;
console.log("La versión del navegador es "+versionNavegador);
var soportaJava = navigator.javaEnabled;
if(soportaJava==true){
    console.log("El navegador soporta java");
}else{
    console.log("El navegador no soporta java");
}

