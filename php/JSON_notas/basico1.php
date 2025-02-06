<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>Listado de Notas JSON</h1>

<?php

   $archivo = "notas.json";

   if(file_exists($archivo)){
        //echo 'El Archivo '.$archivo.' se ha cargado correctamente';
        
        //cargar el archivo y almacenar en variable
        $contenidoJSON = file_get_contents($archivo);
        
        //decodificar de formato JSON a formato array PHP y almacenar en variable
        $arrayNotas=json_decode($contenidoJSON,true);
        
        // $arrayNotas=$contenidoJSON; // Muestra el JSON en bruto

        // Lo anterior en una linea:
        // $arrayNotas = json_decode(file_get_contents($archivo),true);
    }
   else{
    echo 'Algo ha salido mal. No hemos podido cargar'.$archivo;
   }


//Mostramos el contenido de arrayNotas en formato guapo:
   //  echo '<pre>';
   //   print_r($arrayNotas);
   //  echo '</pre>';

   // PINTAR lista de elementos del array
   echo "<table>";
   echo "<tr><td>Producto</td> <td>Cantidad</td> <td>Precio</td> </tr>";
   foreach($arrayNotas['misNotas'] as $producto){
      echo "<tr>";
         echo "<td>{$producto['elemento']}</td>";
         echo "<td>{$producto['cantidad']}</td>";
         echo "<td>{$producto['marca']}</td>";
      echo "</tr>";
      
   }
   echo "</table>";

?>


</body>
</html>