<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        html{
         background-color:lightblue;
        }

        body{
            font-family: sans-serif;
            background-color:white;
            margin: 50px;
            padding:20px;
            border-radius:20px;
        }
        
        ul{
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        li{
            flex: 1 1 120px;
        }

        img{
            max-width:100%;
        }
        .alert{
            border:red solid 1px;
            padding:20px;
        }

    </style>
</head>
<body>


<?php

$modoDesarollo=1; // true=1 y false=0


$archivo='data.json';//almacena el archivo a cargar

//verificamos si el archivo existe
if(file_exists($archivo)){
    $archivoJSON=file_get_contents($archivo); //Cargamos el archivo
    $miArray=json_decode($archivoJSON,true); // convierte el JSON en array de PHP

    if($modoDesarollo){
        echo '<pre>';
        print_r($miArray);
        echo'</pre>';  
    }


   echo '<ul>'; //creamos el ul

   //hacemos un bucle foreach para recorrer el ul
   foreach($miArray['datos'] as $datosCadaLibro ){
       echo'<li>';
           echo '<img src="'.$datosCadaLibro['img'].'" alt="'.$datosCadaLibro['nombre'].'">';
           echo '<h2>'.$datosCadaLibro['nombre'].'</h2>';
           echo '<p>'.$datosCadaLibro['autor'].'</p>';
           echo '<p>'.$datosCadaLibro['fecha'].'</p>';
       echo '</li>';
   }
   echo '</ul>'; //cerramos el ul

}

else{
 echo "No se puede cargar el contenido".$archivo;
}


?>



    
</body>
</html>