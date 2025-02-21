<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="agregar.php" method="GET">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="number" name="numero" placeholder="Número" required>
        <input type="text" name="escala" placeholder="Escala" required>
        <input type="text" name="precio" placeholder="Precio" required>
        <button type="submit">Agregar Juguete</button>
    </form>
    
</body>
</html>