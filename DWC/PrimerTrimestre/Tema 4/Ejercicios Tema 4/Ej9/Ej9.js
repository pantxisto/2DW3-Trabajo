var palabras_espana = new Array('facebook','tuenti', 'youtube', 'hotmail', 'marca');
var palabras_suiza = new Array('facebook', 'youtube', 'hotmail', 'google', 'blick');
var palabras_portugal = new Array('facebook', 'youtube', 'hotmail', 'jogos', 'download');
var palabras_mas_buscadas = new Array(palabras_espana, palabras_suiza, palabras_portugal);
var nombres = new Array("España", "Suiza", "Portugal");

document.write("<table border='1'><caption>Palabras mas buscadas</caption>");
for(var i=0; i<palabras_mas_buscadas.length;i++){
    document.write("<tr><th>"+nombres[i]+"</th>");
    for(var j=0; j<palabras_espana.length;j++){
        if(i==0){
            document.write("<td>"+palabras_espana[j]+"</td>");
        }else if(i==1){
            document.write("<td>"+palabras_suiza[j]+"</td>");
        }else{
            document.write("<td>"+palabras_portugal[j]+"</td>");
        }        
    }
    document.write("</tr>")
}
document.write("</table>")