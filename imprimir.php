<?php
session_start();
$idBoleto = $_POST['id_boleto'];
require 'fpdf184/fpdf.php';
require 'conexionBD.php';

$consulta = $conexion->query("SELECT * FROM `boletos` WHERE ID_boleto='$idBoleto' AND id_Usuario='$_SESSION[id]'");
if(mysqli_num_rows($consulta) > 0){
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Boleto de viaje');
    
    $pdf->Output();
}else{
    echo"Registro no encontrado. Revise dato introducido";
}
