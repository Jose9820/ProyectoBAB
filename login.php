<?php
$nombre = $_POST['nombreUsuario'];
$contrasena = $_POST['contrasenaUsuario'];

require 'conexionBD.php';
$consulta = $conexion->query("SELECT Tipo_Usuario FROM usuarios WHERE Nombre_Usuario = '$nombre' AND Contrasena = '$contrasena'");
if(mysqli_num_rows($consulta) > 0){
    $resultado = mysqli_fetch_array($consulta);
    echo"Su cuenta es de tipo: $resultado[0]";
    //header("Location: bienvenida.html");
}else{
    echo "Esta cuenta no existe";
}

mysqli_close($conexion);
?>