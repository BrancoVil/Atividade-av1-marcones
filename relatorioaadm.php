<?php

include("config.php");
$search = "SELECT * FROM usuarios ORDER BY id ASC";
$result = mysqli_query($conexao, $search);
$search = "SELECT * FROM usuarios1 ORDER BY id ASC";
$result1 = mysqli_query($conexao, $search);
$search = "SELECT * FROM setores ORDER BY id ASC";
$result2 = mysqli_query($conexao, $search);
$search = "SELECT * FROM escolas ORDER BY id ASC";
$result3 = mysqli_query($conexao, $search);

require('FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->Cell(192,32,'RELATÓRIO',1,1,'C');
$pdf->ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(192,10,'ADMINISTRADORES',1,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','',10);
$pdf->Cell(32,10,'#',1,0,'C');
$pdf->Cell(32,10,'CPF',1,0,'C');
$pdf->Cell(32,10,'Senha',1,0,'C');
$pdf->Cell(32,10,'Nome',1,0,'C');
$pdf->Cell(32,10,'Telefone',1,0,'C');
$pdf->Cell(32,10,'Tipo',1,1,'C');


while ($resultado = mysqli_fetch_array($result)) {
    $pdf->Cell(32,10, $resultado['id'],1,0,'C' );
    $pdf->Cell(32,10, $resultado['cpf'],1,0,'C');
    $pdf->Cell(32,10, $resultado['senha'],1,0,'C');
    $pdf->Cell(32,10, $resultado['nome'],1,0,'C');
    $pdf->Cell(32,10, $resultado['telefone'],1,0,'C');
    $pdf->Cell(32,10, $resultado['tipo'],1,1,'C');

}

$pdf->SetFont('Arial','B',24);
$pdf->ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(192,10,'COORDENADORES',1,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','',10);
$pdf->Cell(32,10,'#',1,0,'C');
$pdf->Cell(32,10,'CPF',1,0,'C');
$pdf->Cell(32,10,'Senha',1,0,'C');
$pdf->Cell(32,10,'Nome',1,0,'C');
$pdf->Cell(32,10,'Telefone',1,0,'C');
$pdf->Cell(32,10,'Tipo',1,1,'C');

while ($resultado = mysqli_fetch_array($result1)) {
  $pdf->Cell(32,10, $resultado['id'],1,0,'C' );
  $pdf->Cell(32,10, $resultado['cpf'],1,0,'C');
  $pdf->Cell(32,10, $resultado['senha'],1,0,'C');
  $pdf->Cell(32,10, $resultado['nome'],1,0,'C');
  $pdf->Cell(32,10, $resultado['telefone'],1,0,'C');
  $pdf->Cell(32,10, $resultado['tipo'],1,1,'C');

}

$pdf->SetFont('Arial','B',24);
$pdf->ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(192,10,'SETORES',1,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','',10);
$pdf->Cell(48,10,'#',1,0,'C');
$pdf->Cell(48,10,'Descrição',1,0,'C');
$pdf->Cell(48,10,'Setor',1,0,'C');
$pdf->Cell(48,10,'Localidade',1,1,'C');

while ($resultado = mysqli_fetch_array($result2)) {
  $pdf->Cell(48,10, $resultado['id'],1,0,'C' );
  $pdf->Cell(48,10, $resultado['descricao'],1,0,'C');
  $pdf->Cell(48,10, $resultado['setor'],1,0,'C');
  $pdf->Cell(48,10, $resultado['localidade'],1,1,'C');

}

$pdf->SetFont('Arial','B',24);
$pdf->ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(192,10,'ESCOLAS',1,0,'C');
$pdf->ln();
$pdf->SetFont('Arial','',10);
$pdf->Cell(48,10,'#',1,0,'C');
$pdf->Cell(48,10,'Escola',1,0,'C');
$pdf->Cell(48,10,'Responsável',1,0,'C');
$pdf->Cell(48,10,'Localidade',1,1,'C');

while ($resultado = mysqli_fetch_array($result3)) {
  $pdf->Cell(48,10, $resultado['id'],1,0,'C' );
  $pdf->Cell(48,10, $resultado['escola'],1,0,'C');
  $pdf->Cell(48,10, $resultado['responsavel'],1,0,'C');
  $pdf->Cell(48,10, $resultado['localidade'],1,1,'C');

}

$pdf->Output();
  ?>