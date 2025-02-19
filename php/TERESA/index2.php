<?php

//validamos que recibimos los datos
if(isset($_GET['nombre'],$_GET['password'],$_GET['usuario'],$_GET['host'])){
    $host=$_GET['host'];
    $usuario=$_GET['usuario'];
    $contrasena=$_GET['password'];
    $nombreBaseDatos=$_GET['nombre'];

// 1º Crear conexion    
$conn=mysqli_connect($host,$usuario,$contrasena); //entre parentesis ponemos las variables que hemos creado


//2º Comprobar conexion
if(!$conn){
    die("Conexion fallida: ".mysqli_connect_error());
}
echo "Conexion exitosa";


//3º Crear base de datos

$sql="CREATE TABLE `Tabla 1` (
  `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(255) NOT NULL,
  `img` varchar(255) NULL,
  `texto` text NULL,
  `fecha` date NULL,
  `categoria` varchar(255) NULL,
  `activo` int(1) NOT NULL
);
if(mysqli_query($conn,$sql)){
    echo "Base de datos creada";
}
else{
    echo "Error al crear la base de datos: ".mysqli_error($conn);
}


}
else{
  
    echo "Error";
}
// 4º Crearmos las variables con los datos que vamos a utilizar
/*
$nombreBaseDatos="gatito"; //creamos la variable, que sera el nombre de la base de datos
$host="localhost"; //creamos la variable, que sera el host
$usuario="root"; //creamos la variable, que sera el usuario
$contrasena="root"; //creamos la variable, que sera la contraseña **/



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

  <!--paso 6= hacer el form-->
  <form action="">
<label for="host">Servidor DB</label>
<input type="text" name="host" id="host"  value="localhost" required>
<br>
<label for="usuario">Usuario DB</label>
<input type="text" name="usuario" id="usuario"  value="root" required>
<br>
<label for="password">Password DB</label>
<input type="text" name="password" id="password"  value="root" required>
<br>
<label for="nombre">Nombre DB</label>
<input type="text" name="nombre" id="nombre"  value="root" required>
<br>

<input type="submit" value="Crear base de datos">

  </form>
</body>
</html>

