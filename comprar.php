<?php
session_start();
$idBoleto = $_POST['id_boleto'];

require 'conexionBD.php';
$consulta = $conexion->query("SELECT * FROM `recorridos` WHERE ID_recorridos='$idBoleto'");

if (mysqli_num_rows($consulta) > 0) {
    $recorrido = mysqli_fetch_array($consulta);
    date_default_timezone_set("America/Mexico_City");
    $horaCompra =date("H:i",time());
    $FechaCompra = date("Y-m-d",time());
    $codigo = substr($recorrido['Lugar_Destino'], 0,1). substr($recorrido['Lugar_Partida'], 0,1). $recorrido['ID_recorridos'];

    $conexion->query("INSERT INTO `boletos` (`Precio_Boleto`, `Hora_Compra`, `Fecha_Compra`, `Codigo`, `id_Usuario`) 
    VALUES ($recorrido[Precio], '$horaCompra', '$FechaCompra', '$codigo', '$_SESSION[id]')");
    mysqli_close($conexion);
    header("location: boletos.php");
}else{
    echo"Recorrido no encontrado. Verifique dato";
}
?>