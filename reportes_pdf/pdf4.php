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
        // Título1
        $this->Cell(50,10,'- SUELDO PERSONAL PRODUCCION -',0,0,'C');
        $this->Ln(30);
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
$consulta = "SELECT pe.idpersona, pe.ci, pe.nombre, pe.apellido, pe.telefono, p.turno, p.sueldo
FROM personalproduccion p, persona pe
WHERE (p.idper Like pe.idpersona)  
ORDER BY `pe`.`apellido` ASC";
$resultado = $conexion->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Times','B',12);
$pdf->SetX(10);

    $pdf->Cell(30, 10, 'ID PERSONA', 1, 0, 'C', 0);
    $pdf->Cell(20, 10, 'CI', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'NOMBRE', 1, 0, 'C', 0);
    $pdf->Cell(30, 10, 'APELLIDO', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'TELEFONO', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'TURNO', 1, 0, 'C', 0);
    $pdf->Cell(25, 10, 'SUELDO', 1, 1, 'C', 0);
    $pdf->SetFont('Times','',12);
  
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(10);
    $pdf->Cell(30, 10, $row['idpersona'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['ci'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['apellido'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['telefono'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['turno'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['sueldo'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
