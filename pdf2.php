<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $link = $this->AddLink();
    $this->SetLink($link);
    $this->Image('imagenes/logo.png',10,8,33,0,'','http://www.redbolivision.tv.bo');
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
include('base_datos/bd.php');
$consulta = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE 'pro07') AND (e.idprog LIKE 'pro07') AND (e.idepi LIKE es.idepi)";
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
    $pdf->Cell(50,10,'- EPISODIOS Y ESCENAS ATYPICAL -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',11);
$pdf->SetX(10);

    $pdf->Cell(32, 10, 'ID PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(29, 10, 'ID EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(45, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO. ESCENAS', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEMPORADA', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
    $sum=0;
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(32, 10, $row['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(29, 10, $row['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['duracion'], 1, 1, 'C', 0);
    $sum=$sum+$row['duracion'];
}
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(90);
    $pdf->Cell(70, 10, 'Duracion total del Programa: ', 0, 0, 'C', 0);
     $pdf->Cell(10, 10, $sum, 0, 0, 'C', 0);
     $pdf->Cell(10, 10, 'horas ', 0, 1, 'C', 0);
$consulta2 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE 'pro09') AND (e.idprog LIKE 'pro09') AND (e.idepi LIKE es.idepi)";
$resultado2 = $conexion->query($consulta2);
// Creación del objeto de la clase heredada

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
    $pdf->Cell(50,10,'- EPISODIOS Y ESCENAS RIVERDALE -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',11);
$pdf->SetX(10);

    $pdf->Cell(32, 10, 'ID PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(29, 10, 'ID EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(45, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO. ESCENAS', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEMPORADA', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
    $sum2=0;
while($row2 = $resultado2->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(32, 10, $row2['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(29, 10, $row2['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row2['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row2['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row2['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row2['duracion'], 1, 1, 'C', 0);
    $sum2=$sum2+$row2['duracion'];
}
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(90);
    $pdf->Cell(70, 10, 'Duracion total del Programa: ', 0, 0, 'C', 0);
     $pdf->Cell(10, 10, $sum2, 0, 0, 'C', 0);
     $pdf->Cell(10, 10, 'horas ', 0, 1, 'C', 0);
$consulta3 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE 'pro10') AND (e.idprog LIKE 'pro10') AND (e.idepi LIKE es.idepi)";
$resultado3 = $conexion->query($consulta3);
// Creación del objeto de la clase heredada

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
    $pdf->Cell(50,10,'- EPISODIOS Y ESCENAS ELITE -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',11);
$pdf->SetX(10);

    $pdf->Cell(32, 10, 'ID PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(29, 10, 'ID EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(45, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO. ESCENAS', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEMPORADA', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
    $sum3=0;
while($row3 = $resultado3->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(32, 10, $row3['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(29, 10, $row3['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row3['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row3['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row3['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row3['duracion'], 1, 1, 'C', 0);
    $sum3=$sum3+$row3['duracion'];
}
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(90);
    $pdf->Cell(70, 10, 'Duracion total del Programa: ', 0, 0, 'C', 0);
     $pdf->Cell(10, 10, $sum3, 0, 0, 'C', 0);
     $pdf->Cell(10, 10, 'horas ', 0, 1, 'C', 0);
$consulta4 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE 'pro11') AND (e.idprog LIKE 'pro11') AND (e.idepi LIKE es.idepi)";
$resultado4 = $conexion->query($consulta4);
// Creación del objeto de la clase heredada

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
    $pdf->Cell(50,10,'- EPISODIOS Y ESCENAS VICTORIUS -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',11);
$pdf->SetX(10);

    $pdf->Cell(32, 10, 'ID PROGRAMA', 1, 0, 'C', 0);
    $pdf->Cell(29, 10, 'ID EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(45, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO. ESCENAS', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEMPORADA', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
    $sum4 = 0;
while($row4 = $resultado4->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(32, 10, $row4['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(29, 10, $row4['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row4['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row4['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row4['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row4['duracion'], 1, 1, 'C', 0);
    $sum4=$sum4+$row4['duracion'];
}
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(90);
    $pdf->Cell(70, 10, 'Duracion total del Programa: ', 0, 0, 'C', 0);
     $pdf->Cell(10, 10, $sum4, 0, 0, 'C', 0);
     $pdf->Cell(10, 10, 'horas ', 0, 1, 'C', 0);

$pdf->Output();
?>
