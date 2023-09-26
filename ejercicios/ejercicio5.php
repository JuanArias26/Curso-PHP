<?php
if($_POST){

    $txtNombre=$_POST['txtNombre'];
    echo "Hola ".$txtNombre;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="ejercicio5.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br>
    Apellido
    <input type="text" name="txtApellido" id="">
    <input type="submit" value="Enviar">

</form>
</body>
</html>