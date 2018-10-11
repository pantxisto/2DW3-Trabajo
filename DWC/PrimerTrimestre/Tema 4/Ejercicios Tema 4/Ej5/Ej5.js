var numero1=parseInt(prompt("Introduce un numero"));
var numero2=parseInt(prompt("Introduce otro numero"));

var resto=0;

console.log(maxComDiv(numero1,numero2));

function maxComDiv(num1,num2){
    
    if(num1>num2){
        while(num2!=0){
            resto=num1%num2;
            num1=num2;
            num2=resto;
        }
        return num1;
    }else{
        resto=num1;
        num1=num2;
        num2=resto;
        while(num2!=0){
            resto=num1%num2;
            num1=num2;
            num2=resto;
        }
        return num1;    
    }
}