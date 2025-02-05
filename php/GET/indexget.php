<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">

    <label>Seleccionar color:
<input type="color" name="color">
</label>
<input type="submit" value="enviar">

</form

<?php

//index.php?nombre=Teresa

echo "Feliz Cumpleaños " . $_GET['nombre'] ;

//index.php?nombre=Teresa&frikada=Entrenamiento (lo que pones en URL si tienes varias )
?>

<style>

html{
background-color:white;
}

body{
    background-color:lightgreen;
    margin:20px;
    padding:20px;
    border-radius:10px;
    text-shadow: 3px 4px 8px black;
    font-family: sans-serif;
    font-size: 30px;
    text-align: center;

}

html:hover {background:white;
color:pink;}

    </style>

</body>
</html>