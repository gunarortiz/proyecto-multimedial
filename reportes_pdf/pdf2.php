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
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(50,10,'NOMINA',0,0,'C');
        // Salto de línea
        $this->Ln(10);
        $this->Cell(80);
        // Título
        $this->Cell(50,10,'- PROGRAMAS PRODUCIDOS -',0,1,'C');
        $this->Cell(200,10,'- ESCENAS -',0,1,'C');
        $this->SetFont('Times','B',11);
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
$consulta = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '101') AND (e.idprog LIKE '101') AND (e.idepi LIKE es.idepi)";
$resultado = $conexion->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'The big bang theory', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta2 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '102') AND (e.idprog LIKE '102') AND (e.idepi LIKE es.idepi)";
$resultado2 = $conexion->query($consulta2);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'El chavo del 8', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row2 = $resultado2->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row2['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row2['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row2['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row2['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row2['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row2['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta3 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '103') AND (e.idprog LIKE '103') AND (e.idepi LIKE es.idepi)";
$resultado3 = $conexion->query($consulta3);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'Glee', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row3 = $resultado3->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row3['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row3['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row3['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row3['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row3['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row3['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta4 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '104') AND (e.idprog LIKE '104') AND (e.idepi LIKE es.idepi)";
$resultado4 = $conexion->query($consulta4);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'Breaking Bad', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row4 = $resultado4->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row4['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row4['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row4['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row4['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row4['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row4['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta5 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '105') AND (e.idprog LIKE '105') AND (e.idepi LIKE es.idepi)";
$resultado5 = $conexion->query($consulta5);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'El capo', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row5 = $resultado5->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row5['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row5['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row5['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row5['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row5['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row5['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta6 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '106') AND (e.idprog LIKE '106') AND (e.idepi LIKE es.idepi)";
$resultado6 = $conexion->query($consulta6);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'Hijos de la anarquia', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row6 = $resultado6->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row6['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row6['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row6['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row6['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row6['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row6['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}
$consulta7 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '107') AND (e.idprog LIKE '107') AND (e.idepi LIKE es.idepi)";
$resultado7 = $conexion->query($consulta7);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'Vikingos', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row7 = $resultado7->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row7['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row7['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row7['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row7['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row7['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row7['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}

$consulta9 = "SELECT *
FROM programa p, episodio e, escena es
WHERE (p.idprog LIKE '109') AND (e.idprog LIKE '109') AND (e.idepi LIKE es.idepi)";
$resultado9 = $conexion->query($consulta9);

// Creación del objeto de la clase heredada

$pdf->AddPage();
$pdf->SetFont('Times','B',11);

    $pdf->Cell(200, 10, 'The walking Dead', 0, 1, 'C', 0);
    $pdf->Cell(20, 10, 'ID PROG', 1, 0, 'C', 0);
    $pdf->Cell(15, 10, 'ID EP', 1, 0, 'C', 0);
    $pdf->Cell(65, 10, 'NOMBRE EPISODIO', 1, 0, 'C', 0);
    $pdf->Cell(31, 10, 'NRO.ESC', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'TEM', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'DURACION', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
while($row9 = $resultado9->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(20, 10, $row9['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row9['idepi'], 1, 0, 'C', 0);
    $pdf->Cell(65, 10, $row9['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row9['nroescena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row9['nrotemporada'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row9['duracion'], 1, 1, 'C', 0);
   // $sum=$sum+$row['duracion'];
}

$pdf->Output();
?>
