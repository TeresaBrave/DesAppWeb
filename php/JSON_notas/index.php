<?php
// Nada más empezar
// Si llega información GET/POST y producto es igual a algo 
 if(isset($_POST['producto'])){
   //guarda cada valor de POST en una variable
   $producto = $_POST['producto'];
   $cantidad = $_POST['cantidad'];
   $precio = $_POST['precio'];
}
?>

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


<form method='POST'>
   <label>
      Producto: <input type="text" name="producto">  
   </label>
   
   <label>
      Cantidad: <input type="number" name="cantidad" value='1'>  
   </label>

   <label>
      Precio: <input type="number" name="precio" value='0'>  
   </label>
   <input type="submit" value="Añadir a Lista">
</form>


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



 //echo $_GET['producto']." ".$_GET['cantidad']." ".$_GET['precio']."€";


// Si habiá un valor en producto
if(!empty($producto)) {
    echo "$producto - $cantidad - $precio €";
    // AÑADIR LOS ELEMENTOS DEL GET/POST al final del arrayNotas
    // array_push($arrayNotas['misNotas'], Array('elemento'=>$_GET['producto']));
    array_push($arrayNotas['misNotas'], Array('elemento'=>$producto, 'cantidad'=>$cantidad, 'precio'=>$precio));
    // GUARDAR EL arrayNotas (con los nuevos elementos) en el JSON
    // Sobre escribir el archivo JSON con los datos de arrayNotas
    
    $JSONNotas = json_encode($arrayNotas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($archivo, $JSONNotas);
}




//$contenidoJSON = file_get_contents($archivo);
        
//decodificar de formato JSON a formato array PHP y almacenar en variable
//$arrayNotas=json_decode($contenidoJSON,true);





//Mostramos el contenido de arrayNotas en formato guapo:
//     echo '<pre>';
//      print_r($arrayNotas);
//   echo '</pre>';

   // PINTAR lista de elementos del array
   echo "<table>";
   echo "<tr><td>Producto</td> <td>Cantidad</td> <td>Precio</td> </tr>";
   foreach($arrayNotas['misNotas'] as $producto){
      echo "<tr>";
         echo "<td>{$producto['elemento']}</td>";
         echo "<td>{$producto['cantidad']}</td>";
         echo "<td>{$producto['precio']}</td>";
      echo "</tr>";
      
   }
   echo "</table>";

?>


</body>
</html>