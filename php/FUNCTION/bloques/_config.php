<?php 

$debug=1; // Variable para saber si estoy en modo desarollo ,modo desarollo=1 =true SI NO=0=false

//Funcion que se encarga de mostrar un mensaje si estamos en modo debug
function debug($message){
    global $debug; //GLOBAL --> para acceder a una variable fuera de la funcion
//Si debug es true escribimos el mensaje
    if($debug){
       echo $message ."\n"; // con el \n hacemos un salto de linea
    }
}

//Lamamos a la funcion
debug('Estas en modo desarollo');


//Function para en caso de modo debug este activado muestre el array
function debugPrint_r($array){
global $debug; //GLOBAL --> para acceder a una variable fuera de la funcion
    if($debug){ 
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

}

function cargarJSON($r){
    if(file_exists($r)){
        $miJSON = file_get_contents($r);
        $miArray=json_decode($miJSON,true);
        return $miArray;
    }
    
    else{
        echo "No se encontro el archivo";
    }
}