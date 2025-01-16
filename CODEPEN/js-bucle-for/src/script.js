//4.DATOS
let bolitas=360;

//5.PINTAR

//1.Variable que almacenará lo que acabaremos pintando
libreta="";

//3.Bucle que repita la acción 100 veces
 for(i=0;i<=bolitas;i++){
   libreta+='<li style="rotate:'+i+'deg">'+i+'</li>';

 }
   
//2.Insertar en el <ul> el contenido de la libreta
document.querySelector("ul").innerHTML=libreta;
        