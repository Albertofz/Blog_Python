<?php  


require('../librerias/fpdf184/fpdf.php');

class PDF extends FPDF
{

function Header()
{
  
    // Arial bold 15
    $this->SetFont('Arial','B',13);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte del Formulario',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this-> Cell(60,8, 'Usuario', 1, 0,'C');
	$this-> Cell(60,8, 'puntos_usuario', 1,0,'C');
	$this-> Cell(30,8, 'fecha_reg', 1, 0,'C');
	$this-> Cell(30,8, 'hora_reg', 1, 1, 'C');

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

require '../proceso/con_bd.php';

$consulta = " SELECT * FROM puntos";
$resul = mysqli_query($conexion,$consulta);

$pdf = new PDF();
$pdf-> AliasnbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while ($row = $resul->fetch_assoc() ) {
	
$pdf->Cell(60,8, $row['user'], 1, 0,'C');
$pdf->Cell(60,8, $row['puntos_usuario'], 1, 0,'C');
$pdf->Cell(30,8, $row['fecha_reg'], 1, 0,'C');
$pdf->Cell(30,8, $row['hora_reg'], 1, 1,'C');

}



$pdf->Output();
?>