<?php

$debug= 0;

function debug($message){
    global$debug;
    if($debug)
    {
        echo $message. "n/";
    }

}

debug('estás en modo desarrollo');
  

//mostrar el array
function debugPrint_r($array){
    global $debug;
    if($debug)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}


function cargarJSON($archivo){
        // cargar el JSON
    if (file_exists($archivo))
    {
        $miJSON=file_get_contents($archivo);
        $miArray=json_decode($miJSON,'true');
        return $miArray;
    }
    else{
        echo "No hemos guardado nada";
    }
        
}

//INICIO DE SESION

session_start();// Arrancamos la sesion

if(isset($_SESSION['logueado']))
{
    echo '<p> Bienvenida, has iniciado sesión </p>';
    $logueado = true;
}
else{
    echo '<p>No has iniciado sesión</p>';
    $logueado = false;
}



?>