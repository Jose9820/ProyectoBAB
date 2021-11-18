<?php
session_start();
$idBoleto = $_POST['id_boleto'];

require 'conexionBD.php';
$consulta = $conexion->query("SELECT * FROM `boletos` WHERE ID_boleto='$idBoleto' AND id_Usuario='$_SESSION[id]'");
if(mysqli_num_rows($consulta) > 0){
    $conexion->query("DELETE FROM `boletos` WHERE ID_boleto='$idBoleto' AND id_Usuario='$_SESSION[id]'");
    mysqli_close($conexion);
    header("location: boletos.php");
}else{
    echo"Registro no encontrado. Revise dato introducido";
}
?>