<?php
$nombre = $_POST['nombreUsuario'];
$contrasena = $_POST['contrasenaUsuario'];

require 'conexionBD.php';
$consulta = $conexion->query("SELECT ID_usuarios, Tipo_Usuario FROM usuarios WHERE Nombre_Usuario = '$nombre' AND Contrasena = '$contrasena'");
if(mysqli_num_rows($consulta) > 0){
    $resultado = mysqli_fetch_array($consulta);
    $_SESSION["id"]= $resultado[0];
    $_SESSION["tipoCuenta"]= $resultado[1];
    header("Location: bienvenida.html");
}else{
    echo "Esta cuenta no existe";
}

mysqli_close($conexion);
?>