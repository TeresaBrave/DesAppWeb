<?php require '_config.php';?>
<?php include '_header.php';?>
<h1>Panel Secreto</h1>

<?php
session_start();
if(isset($SESSION['logueado'])){

    echo "Tienes permiso para estar aqui";

}

else{
    echo "No tienes permiso para estar aqui";
    header('Location: index.php');
}   

?>

<?php include '_footer.php';?>
