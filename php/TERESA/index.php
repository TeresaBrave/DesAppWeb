<?php

// 4º Crearmos las variables con los datos que vamos a utilizar

$nombreBaseDatos="gatito"; //creamos la variable, que sera el nombre de la base de datos
$host="localhost"; //creamos la variable, que sera el host
$usuario="root"; //creamos la variable, que sera el usuario
$contrasena="root"; //creamos la variable, que sera la contraseña

//------NO PUEDES TOCAR a partir de aqui

// 1º Crear conexion    
$conn=mysqli_connect($host,$usuario,$contrasena); //entre parentesis ponemos las variables que hemos creado


//2º Comprobar conexion
if(!$conn){
    die("Conexion fallida: ".mysqli_connect_error());
}
echo "Conexion exitosa";


//3º Crear base de datos

$sql="CREATE DATABASE IF NOT EXISTS $nombreBaseDatos";// 5º Sustituimos la variable aqui con IF NOT EXISTS 
if(mysqli_query($conn,$sql)){
    echo "Base de datos creada";
}
else{
    echo "Error al crear la base de datos: ".mysqli_error($conn);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>TeresaDB</h1>  

</body>
</html>

