<!php

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$contraseña=$_POST['password'];
$repetircontraseña=$_POST=['password2'];
$correoelectronico=$_POST['correo'];
$telefono=$_POST['telefono'];


$con = mysqli_connect("localhost","root","4f32736") or die ("ocurrio un error al conectarse a la base de datos o servidor");

$query = "INSERT INTO formulario (usuario,nombre,contraseña,repetircontraseña,correoelectronico,telefono)
    VALUES ($usuario', $nombre', $contraseña', $repetircontraseña',$correoelectronico',$telefono')"

    mysqli_query($con,$query) or die (Error, el query fallo');
    mysqli_close($con);

    ?>