<?php

require('skripte/fpdf/fpdf.php');

$con = mysqli_connect("localhost","root","","dwalabosi") or die("Neuspjelo spajanje na bazu!");

$baza = mysqli_select_db($con,"proizvodi");
$link1=mysqli_query($con, "SET NAMES 'utf8'");
$link2=mysqli_query($con, "SET CHARACTER_SET 'utf8'");


$naziv = $_POST['naziv'];
$tip = $_POST['tip'];

$pdf= new FPDF();

$pdf->SetAuthor('Josip Kardum');
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);

$pdf->AddPage('P'); 

$pdf->SetXY(0,10);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(210,10,'Popis proizvoda',1,0,'C',0);

$pdf->SetXY(5,25);
$pdf->SetFontSize(10);
$pdf->Cell(50,10,'Naziv',0,0,'L',0);
$pdf->Cell(50,10,'Tip',0,0,'L',0);
$pdf->Cell(50,10,'Opis',0,0,'L',0);

$popis = array();

$query="SELECT * FROM proizvodi WHERE naziv = '$naziv' OR tip = '$tip'";
$result=mysqli_query($con, $query);
	
	$y_axis = 30;
	$row_height = 6;
	$y_axis = $y_axis + $row_height;

while ($row = mysqli_fetch_array($result)) {
	$pdf->SetY($y_axis);
	$pdf->SetX(5);

	$nazivPR = $row['naziv'];
	$tipPR = $row['tip'];
	$opis = $row['opis'];

	$pdf->Cell(50,10,$nazivPR,0,0,'L',0);
	$pdf->Cell(50,10,$tipPR,0,0,'L',0);
	$pdf->Cell(50,10,$opis,0,0,'L',0);

	$y_axis = $y_axis + $row_height;
}

$y_axis = $y_axis + $row_height;

$pdf->SetY($y_axis);
$pdf->SetX(5);

$pdf->Cell(40,10,'Vegetarijanski',0,0,'L',0);
$pdf->Cell(40,10,'Halal',0,0,'L',0);
$pdf->Cell(40,10,'Koser',0,0,'L',0);
$pdf->Cell(50,10,'Alergeni',0,0,'L',0);
$pdf->Cell(40,10,'Cijena',0,0,'L',0);

$query="SELECT * FROM proizvodi WHERE naziv = '$naziv' OR tip = '$tip'";
$result=mysqli_query($con, $query);

$y_axis = $y_axis + $row_height + $row_height;

while ($row = mysqli_fetch_array($result)) {
	$pdf->SetY($y_axis);
	$pdf->SetX(5);

	$vege = $row['vegetarijanski'];
	$halal = $row['halal'];
	$koser = $row['koser'];
	$alergeni = $row['alergeni'];
	$cijena = $row['cijena'];

	$pdf->Cell(40,10,$vege,0,0,'L',0);
	$pdf->Cell(40,10,$halal,0,0,'L',0);
	$pdf->Cell(40,10,$koser,0,0,'L',0);
	$pdf->Cell(50,10,$alergeni,0,0,'L',0);
	$pdf->Cell(40,10,$cijena,0,0,'L',0);

	$y_axis = $y_axis + $row_height;
}


$pdf->Output('PopisProizvoda.pdf','I');

?>