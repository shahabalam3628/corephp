<?php
require("fpdf/fpdf.php");
//$msg="Hi this a message to check function";
$pdf=NEW FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","b","14");
$pdf->Image('img/user.png',10,6,30);
$pdf->Cell(0,10,"Visitor Management System",0,1,"C");

$pdf->SetFont("Arial","","12");
$pdf->Cell(0,10,"Register Employees List",0,1,"C");

$pdf->SetFont("Arial","","12");
include("connection.php");
$result=mysqli_query($con,"select * from users");
$pdf->Cell(35,10,"Emp Code",1,0);
$pdf->Cell(60,10,"Emp Name",1,0);
$pdf->Cell(70,10,"Email",1,0);

$pdf->Cell(30,10,"User Type",1,1);

while($row=mysqli_fetch_array($result))
{
	$pdf->Cell(35,10,"$row[1]",1,0);
	$pdf->Cell(60,10,"$row[2]",1,0);
	$pdf->Cell(70,10,"$row[3]",1,0);
	
	$pdf->Cell(30,10,"$row[6]",1,1);
	
	
}
//$pdf->write(5,'fgsgujgfgsdfsdfgdsfdgfggdfgsdgfgdsgf');


$pdf->Output();

?>