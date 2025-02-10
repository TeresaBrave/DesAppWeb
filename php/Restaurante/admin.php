<form action="admin.php" method="get">
    <input type="text" name="nombrePlato" placeholder="nombre plato" required>
    <textarea type="text" name="ingredientes"  placeholder="ingredientes" required></textarea>
    <input type="number" name="precio"  placeholder="precio" required>

    <input type="submit" value="Guardar Platu">
</form>

<?php
    $archivo ='data.json';
    //1º cargar JSON y convertirlo en Array PHP=mismo paso que en index.php
    if(file_exists($archivo)){
        $miJSON=file_get_contents($archivo);
        $miArray=json_decode($miJSON,true);

        //2ºBucle para mostrar los platos de la carta
        if(isset($_GET['nombrePlato'])){
            //2ºcaputar datos del GET, crear variables e igualar cada GET 
            $nombrePlato = $_GET['nombrePlato'];
            $ingredientes = $_GET['ingredientes'];
            $precio =$_GET['precio'];
        
            //3ºmeter esos datos en el array miArray
            array_push($miArray['carta'],['nombre'=>$nombrePlato, 'ingredientes'=>$ingredientes,'precio'=>$precio]);
            
            //4ºcodificar miArray en formato JSON
            $miJSON = json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            //5ºguardar JSON
            file_put_contents($archivo, $miJSON);        
        }

    }
    else{
        echo "ERROR: No hemos podido cargar los datos";
    }

?>