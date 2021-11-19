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
    while($row = $consulta ->fetch_assoc())
    {
        $pdf -> Cell (20, 10, $row ['Codigo'], 1 , 0, 'C', 0);
        $pdf -> Cell (30, 10, $row ['Nombre_Usuario'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Lugar_Partida'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Lugar_Destino'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Hora'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Fecha'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Precio'], 1 , 0, 'C', 0);
        $pdf -> Cell (20, 10, $row ['Cupo_Disponible'], 1 , 1, 'C', 0);
    }
    $pdf->Output();
    //header("location: boletos.php");
}else{
    echo"Registro no encontrado. Revise dato introducido";
}
mysqli_close($conexion);
?>