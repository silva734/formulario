<?php 
$host = "localhost";
$usuario = "root";
$contraseña= "";
$bd="formulario";

$connect = new mysqli($host, $usuario, $contraseña,$bd);

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";

if($connect->query($sql) === TRUE) {
    echo "datos guardados correctamente";
}else{
    echo "error: ". sql . "<br>". $connect->error;
}
$connect -> close();
?>