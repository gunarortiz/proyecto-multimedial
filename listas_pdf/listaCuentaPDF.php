<?php
require('fpdf/fpdf.php');
require('base_datos/bd.php');
class PDF extends FPDF
{
    //CABECERA
    function Header(){
        //logo
        $this->Image('imagenes/logo.png',7,3,33);
        //arial bold 15
        $this->SetFont('Arial','B',15);
        //mov derecha
        $this->Cell(30);
        //titulo
        $this->Cell(130,10,'SERIES DE TELEVISION',0,0,'C');
        //salto de linea
        $this->Ln(20);
       
        $this->Cell(130,10,'LISTA PERSONAL DE LOS PROGRAMAS',0,0,'C');
        //salto de linea
        $this->Ln(20);
    }
    //PIE
    function Footer(){        
        //Posicion a 1,5cm del final
        $this->SetY(-15);
        //Arial italic 8
        $this->SetFont('Arial','I',5);
        //Numero de Pagina
        $this->Cell(0,10,utf8_decode('Pagína ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

$consulta = "SELECT * FROM cuenta";
$resultado = $conexion->query($consulta);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->SetX(65);
$pdf->Cell(15, 10, 'Nro', 1, 0, 'C', 0);
$pdf->Cell(30, 10, 'ID Programa', 1, 0, 'C', 0);
$pdf->Cell(30, 10, 'ID Personal', 1, 1, 'C', 0);
$c=1;
$pdf->SetFont('Arial','',10);
while($row = $resultado->fetch_assoc()){
    $pdf->SetX(65);
    $pdf->Cell(15, 10, $c , 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['idprog'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['idper'], 1, 1, 'C', 0);
    $c+=1;    
}

$pdf->Output();

?>