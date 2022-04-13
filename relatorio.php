<?php

include("config.php");
$search = "SELECT * FROM visita ORDER BY id ASC";
$result = mysqli_query($conexao, $search);

require('FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->Cell(192,30,'RELATORIO',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(16,10,'#',1,0,'C');
$pdf->Cell(25,10,'Coordenador',1,0,'C');
$pdf->Cell(25,10,'Setor',1,0,'C');
$pdf->Cell(25,10,'Escola',1,0,'C');
$pdf->Cell(25,10,'Qtd. Aluno',1,0,'C');
$pdf->Cell(25,10,'Conteudo',1,0,'C');
$pdf->Cell(25,10,'Professor',1,0,'C');
$pdf->Cell(26,10,'Data de Visita',1,1,'C');

while ($resultado = mysqli_fetch_array($result)) {
    $pdf->ln();
    $pdf->Cell(40, 5, $resultado['id']);
    $pdf->SetX(35);
    $pdf->Cell(60, 5, $resultado['coordenador']);
    $pdf->SetX(50);
    $pdf->Cell(40, 5, $resultado['setor']);
    $pdf->SetX(77);
    $pdf->Cell(40, 5, $resultado['escola']);
}

$pdf->Output();
  ?>