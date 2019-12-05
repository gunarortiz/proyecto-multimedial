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
$consulta = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'guion') AND (t.idtec LIKE p.idpersona)";
$resultado = $conexion->query($consulta);
// Creación del objeto de la clase heredada
$pdf = new PDF('L', 'mm', array(215,140));
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
    $pdf->Cell(50,10,'- PERSONAL ENCARGADO DEL GUION -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'FECHA NAC.', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'TELEFONO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['telefono'], 1, 1, 'C', 0);
}
$consulta2 = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'maquinaria') AND (t.idtec LIKE p.idpersona)";
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
$pdf->Cell(50,10,'- PERSONAL ENCARGADO DE MAQUINARIA -',0,0,'C');
$pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'FECHA NAC.', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'TELEFONO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row2 = $resultado2->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row2['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row2['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row2['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row2['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row2['telefono'], 1, 1, 'C', 0);
}

$consulta3 = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'operario') AND (t.idtec LIKE p.idpersona)";
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
    $pdf->Cell(50,10,'- PERSONAL ENCARGADO DE LA OPERACION -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'FECHA NAC.', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'TELEFONO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row3 = $resultado3->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row3['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row3['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row3['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row3['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row3['telefono'], 1, 1, 'C', 0);
}

$consulta4 = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'escenografia') AND (t.idtec LIKE p.idpersona)";
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
    $pdf->Cell(50,10,'- PERSONAL ENCARGADO DE LA ESCENOGRAFIA -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'FECHA NAC.', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'TELEFONO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row4 = $resultado4->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row4['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row4['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row4['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row4['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row4['telefono'], 1, 1, 'C', 0);
}
$consulta5 = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'electricista') AND (t.idtec LIKE p.idpersona)";
$resultado5 = $conexion->query($consulta5);
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
    $pdf->Cell(50,10,'- PERSONAL ENCARGADO DE LA ELECTRICIDAD -',0,0,'C');
    $pdf->Ln(30);

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'FECHA NAC.', 1, 0, 'C', 0);
    $pdf->Cell(40, 10, 'TELEFONO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row5 = $resultado5->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row5['ci'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row5['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row5['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row5['fecha_nac'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row5['telefono'], 1, 1, 'C', 0);
}
$consulta6 = "SELECT p.ci, p.nombre, p.apellido, p.fecha_nac, p.telefono FROM tecnico t, persona p 
WHERE (t.mat_trabajo LIKE 'musica') AND (t.idtec LIKE p.idpersona)";
$resultado6 = $conexion->query($consulta6);
// Creación del objeto de la clase heredada

$pdf->Output();
?>
