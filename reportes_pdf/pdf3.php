<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $link = $this->AddLink();
    $this->SetLink($link);
    $this->Image('../imagenes/logo.png',10,8,33,0,'','http://www.redbolivision.tv.bo');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
include('../base_datos/bd.php');
$consulta = "SELECT p.idprog, p.nombre, a.tipo
FROM programa p, ambiente a, se_realiza s
WHERE (s.idambiente LIKE a.idambiente) and (p.idprog LIKE s.idprog)";
$resultado = $conexion->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    $pdf->Cell(50,10,'NOMINA',0,0,'C');
    // Salto de línea
    $pdf->Ln(10);
    $pdf->Cell(80);
    // Título
    $pdf->Cell(50,10,'- LOCACIONES -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(50);

    $pdf->Cell(35, 10, 'ID PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(50, 10, 'NOMBRE PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(50, 10, 'LOCACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(50);
    $pdf->Cell(35, 10, $row['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(50, 10, $row['tipo'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
