<?php
session_start();
if(!isset($_SESSION['tipoCuenta'])){
    header("Location: index.html");
}

$idBoleto = $_POST['id_boleto'];
require 'fpdf184/fpdf.php';
require 'conexionBD.php';

$consulta = $conexion->query("SELECT * FROM `boletos` WHERE ID_boleto='$idBoleto' AND id_Usuario='$_SESSION[id]'");
if(mysqli_num_rows($consulta) > 0){
    $boleto = mysqli_fetch_array($consulta);
    $usuario = mysqli_fetch_array($conexion->query("SELECT Nombre_Usuario FROM `usuarios` WHERE ID_usuarios='$_SESSION[id]'"));
    $recorrido = mysqli_fetch_array($conexion->query("SELECT Lugar_Partida, Lugar_Destino FROM recorridos WHERE ID_recorridos='$boleto[Codigo]'"));
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(60,10,'Boleto de viaje '.$idBoleto, 0, 1, "L");
    $pdf->SetFont('Arial','',16);
    $pdf->Cell(40, 10, 'Codigo:', "LT", 0, 'L');
    $pdf->Cell(40, 10, $boleto['Codigo'],"T", 0, 'L');
    $pdf->Cell(40, 10, 'Nombre:', "T", 0, 'L');
    $pdf->Cell(40, 10, $usuario[0], "TR", 1, 'L');
    $pdf->Cell(40, 10, 'Origen:', "L", 0, 'L');
    $pdf->Cell(40, 10, $recorrido[0], 0, 0, 'L');
    $pdf->Cell(40, 10, 'Destino:', 0, 0, 'L');
    $pdf->Cell(40, 10, $recorrido[1], "R", 1, 'L');
    $pdf->Cell(40, 10, 'Hora:', "L", 0, 'L');
    $pdf->Cell(40, 10, $boleto['Hora_Compra'], 0, 0, 'L');
    $pdf->Cell(40, 10, 'Fecha:', 0, 0, 'L');
    $pdf->Cell(40, 10, $boleto['Fecha_Compra'], "R", 1, 'L');
    $pdf->Cell(80, 10, 'Precio:', "LB", 0, 'L');
    $pdf->Cell(80, 10, '$'.$boleto['Precio_Boleto'], "BR", 0, 'L');
    
    $pdf->Output();
}else{
    echo"Registro no encontrado. Revise dato introducido";
}
mysqli_close($conexion);
?>